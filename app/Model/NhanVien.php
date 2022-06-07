<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'nhan_vien';
    protected $fillable = ['ten_nhanvien','gioitinh', 'quequan', 'sdt' , 'email', 'capbac'];
}
