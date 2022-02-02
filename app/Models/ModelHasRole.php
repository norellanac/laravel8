<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHasRole extends Model
{

    //********THIS MODEL IS USED ONLY FOR A DATABASE ER DIAGRAM, DELETE IF YOU DONT NEED IT* */
    use HasFactory;
    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'model_id', );
    }
}
