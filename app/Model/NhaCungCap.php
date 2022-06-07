<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'nha_cung_cap';
    protected $fillable = ['ten_ncc'];
}
