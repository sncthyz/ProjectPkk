<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
public function users(){
return  $this->belongsTo(User::class);
}


public function comments(){
return $this->hasMany(comments::class);
}
}
