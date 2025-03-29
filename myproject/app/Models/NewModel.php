<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    protected $table = 'new'; // Chỉ định bảng trong database

    protected $fillable = ['tieuDe', 'tomTat', 'noiDung', 'xem', 'category_id', 'created_at', 'updated_at']; // Cho phép mass assignment

    public $timestamps = true; // Bật timestamps để Laravel tự quản lý `created_at` & `updated_at`

    // Định nghĩa mối quan hệ với Category (nếu có)
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
