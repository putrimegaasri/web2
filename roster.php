<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roster extends Model
{
    protected $table= 'roster';
    protected $fillable = ['kode','matakuliah','namadosen'];
}
