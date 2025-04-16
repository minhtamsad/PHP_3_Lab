<?php

namespace App\Http\Controllers;

use App\Models\tin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TinController extends Controller
{
    function index()
    {
        $data = tin::all();
        return view('client.danhsach', ['data' => $data]);
    }


    function them()
{
    return view("client.them");
}


function xoa($id)
{
    $t = tin::find($id);
    if ($t == null) return Redirect::to('/thongbao')->with('error', 'Không tìm thấy tin tức');

    $t->delete();
    return redirect('/tin/ds');
}


function capnhat($id)
{
    $t = tin::find($id);
    if ($t == null) return Redirect::to('/thongbao')->with('error', 'Không tìm thấy tin tức');
    return view("client.capnhattin", ['tin' => $t]);
}

function capnhat_(Request $request, $id)
{
    $t = tin::find($id);
    if ($t == null) return Redirect::to('/thongbao')->with('error', 'Không tìm thấy tin tức');

    $t->tieuDe = $request->input('tieuDe');
    $t->tomTat = $request->input('tomTat');
    $t->urlHinh = $request->input('urlHinh');
    $t->idLT = $request->input('idLT');
    $t->save();

    return redirect('/tin/ds');
}

function them_(Request $request)
{
    $t = new tin;
    $t->tieuDe = $request->input('tieuDe');
    $t->tomTat = $request->input('tomTat');
    $t->urlHinh = $request->input('urlHinh');
    $t->idLT = $request->input('idLT');
    $t->save();

    return redirect('/tin/ds');
}
}
