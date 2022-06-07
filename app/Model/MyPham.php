<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPham extends Model
{
    public const RULES = [
        'TENMYPHAM' => 'required',
    ];
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mypham';
    protected $fillable = ['TENMYPHAM','id_LOAIMYPHAM','id_NCC','ANH_1','CHITIET_1','CHITIET_2','CHITIET_3','CHITIET_4','CHITIET_5','CHITIET_6','CHITIET_7','CHITIET_8','TTTH','GIAMYPHAM','GIAMYPHAMGIAM'];
}
