<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chatbot extends Model
{
    use HasFactory, SoftDeletes;

    public function questions()
    {
        return $this->hasMany('App\Models\ChatbotsQuestion', 'chatbot_id', );
    }

    
}
