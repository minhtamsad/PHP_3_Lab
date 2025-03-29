<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index($id){
        return View("new", ['id' => $id]);
    }
    public function lab2(){
        $query = DB::table('new')
            ->select('id', 'tieuDe', 'xem')
            ->orderBy('xem', 'desc')
            ->limit(10);

        $data = $query->get();

        return View("client.lab2", ['data' => $data]);

    }
    public function lab2bai2(){
        $query = DB::table('new')
            ->select('id', 'tieuDe', 'xem','created_at')
            ->orderBy('created_at', 'desc')
            ->limit(10);

        $data = $query->get();
        // var_dump($data); exit();

        return View("client.lab2bai2", ['data' => $data]);

    }
    public function tintrongloai($id)
    {
        $data = DB::table('new')
            ->select('id', 'tieuDe', 'tomTat', 'noiDung', 'xem', 'created_at')
            ->where('category_id', $id) // Đổi từ loai_id thành category_id
            ->orderByDesc('created_at')
            ->limit(10)
            ->get();

        return view("client.tintrongloai", ['data' => $data]);
    }

}
