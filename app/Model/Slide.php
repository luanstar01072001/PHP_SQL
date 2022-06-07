<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public const RULES = [
        'ten_slide' => 'required',
    ];
    use HasFactory;
    public $timestamps = false;
    protected $table = 'slide';
    protected $fillable = ['ten_slide','img_slide'];

}

