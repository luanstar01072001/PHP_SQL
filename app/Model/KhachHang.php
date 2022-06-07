<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KhachHang extends Model
{
    use HasFactory;
    
    protected $table = 'khach_hang';
    protected $fillable = ['ten_kh','email','sdt'];

}
