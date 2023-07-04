<?php
namespace Orm;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    protected $table ='post';

    public function user(){
        return $this->belongsTo(User::class);
    }
}