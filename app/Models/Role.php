<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

        //********THIS MODEL IS USED ONLY FOR A DATABASE ER DIAGRAM, DELETE IF YOU DONT NEED IT* */
    use HasFactory;

    /* public function role()
    {
        return $this->hasMany('App\Models\ModelHasRole', 'model_id', );
    } */
}
