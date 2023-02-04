<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangUrusan extends Model
{
    use HasFactory;
    protected $table = 'tb_bidang_urusan';
    public function urusan()
    {
        return $this->belongsTo('App\Models\Urusan');
    }
}
