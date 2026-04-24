<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class PostModel extends Model
{
    protected $table = 'post_models';
    protected $fillable = ['title', 'body'];
    protected $hidden = ['id', 'updated_at'];

}
