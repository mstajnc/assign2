<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Booking extends Model
{

	 protected $fillable = [
        'booking', 'notes', 'user_id', 'court_id'
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function court()
    {
        return $this->belongsTo(Court::class);
    }

    public function addBooking(Booking $booking, $userId, $courtId)
    {
     	$booking->user_id = $userId;
    	return $this->save(compact($booking));
    }
}
