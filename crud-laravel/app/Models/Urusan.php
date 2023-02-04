<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urusan extends Model
{
    use HasFactory;
    protected $table = 'tb_urusan';
    public function urusan()
    {
        return $this->hasMany('App\Models\BidangUrusan');
    }
}
