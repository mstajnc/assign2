<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Booking extends Model
{

	 protected $fillable = [
        'booking', 'notes',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }
}
