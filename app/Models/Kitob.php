<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitob extends Model
{
    use HasFactory;
 protected $fillable=['name','muallif_id'];
    function muallif(){
        return $this->belongsTo(Muallifi::class,'muallif_id','id');
    }

}
