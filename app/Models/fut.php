<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class fut extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function comments()
    {
        return $this->hasMany(Comments::class ,'post_id');
    }
    public function telephones(){
        return $this->hasMany(telephones::class, 'post_id');
    }
}
