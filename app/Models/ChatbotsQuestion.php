<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatbotsQuestion extends Model
{
    use HasFactory, SoftDeletes;

    public function answers()
    {
        return $this->hasMany('App\Models\ChatbotsAnswer', 'model_id', );
    }
}
