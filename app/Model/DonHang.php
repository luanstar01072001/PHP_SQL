<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    // use HasFactory;

    protected $table = 'don_hang';

    protected $fillable = [
        'code',
    'kh_email',
    'kh_ten',
    'kh_sdt',
    'kh_dia_chi',
    'ten_san_pham',
    'so_luong',
    'gia'];
}
