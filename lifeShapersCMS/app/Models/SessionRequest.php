<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionRequest extends Model
{
    protected $table = 'session_requests';

    protected $fillable = [
        'clientfName', 
        'clientlName', 
        'mobile', 
        'status', 
        'requestReceiveMode', 
        'purpose', 
        'duration', 
        'participation', 
        'tentativeAppointmentDate', 
        'tentativeStartTime', 
        'tentativeEndTime', 
        'tentativeMode', 
        'sessionRequestDate', 
        'contactId', 
        'requestStatus'
    ];
}
