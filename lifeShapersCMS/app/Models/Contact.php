<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name', 'l_name', 'mobile', 'address', 'email', 'relationship_status',
        'age', 'company', 'mode_of_contact', 'source', 'purpose', 'participants', 
        'no_of_participants', 'status', 'client_rating', 'is_alive', 'date_of_first_contact',
        'remaining_payment', 'total_payment_completed', 'total_session_hours_completed'
    ];

    // Define other relationships or methods if necessary
}
