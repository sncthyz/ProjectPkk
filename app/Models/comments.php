<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{


public function users(){
return $this->belongsTo(User::class);
}
public function posts(){
return$this->belongsTo(Post::class);
}


public  function products(){
return $this->belongsTo(products::class);
}
}
