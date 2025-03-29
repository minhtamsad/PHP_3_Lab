<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Tên bảng trong database

    protected $fillable = [
        'name',
    ];

    public function news()
    {
        return $this->hasMany(NewModel::class, 'category_id'); // Liên kết với bảng new
    }
}
