<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
      protected $table = 'gurus';
     protected $fillable = ['nama','jabatan','poto'];
     public $timestamps = true;
}
