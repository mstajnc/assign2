<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    protected $primaryKey = 'court_id'; //changed primaryKey property to prevent Eloquent assuming it is 'id' as default

    protected $fillable = ['court_name', 'surface', 'under_construction'];

}
