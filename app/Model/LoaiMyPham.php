<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiMyPham extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'LoaiMyPham';
    protected $fillable = ['TENLOAI','CHITIET'];

}

