<?php

namespace App\Http\Controllers;

use App\Models\SessionRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SessionRequestController extends Controller
{
    // Clean up and structure the data
    private function cleanUp($data)
    {
        return [
            'clientfName' => $data['fName'],
            'clientlName' => $data['lName'],
            'mobile' => $data['mobile'],
            'status' => $data['status'],  // Revisit/First visit
            'requestReceiveMode' => $data['reqRcd'], // Request received mode
            'purpose' => $data['purpose'],
            'duration' => $data['duration'],
            'participation' => $data['participation'],
            'tentativeAppointmentDate' => Carbon::parse($data['appointmentDate']),
            'tentativeStartTime' => $data['startTime'],
            'tentativeEndTime' => $data['endTime'],
            'tentativeMode' => $data['mode'],
            'sessionRequestDate' => Carbon::parse($data['sessionRequestDate']),
            'contactId' => $data['contactId'],
            'requestStatus' => 'pending'
        ];
    }

    // Add a new session request
    public function store(Request $request)
    {
        $data = $this->cleanUp($request->all());
        $sessionRequest = SessionRequest::create($data);

        return response()->json(['success' => true, 'message' => 'Session request added successfully.', 'id' => $sessionRequest->id]);
    }

    // Get all session requests
    public function index()
    {
        $sessionRequests = SessionRequest::orderBy('tentativeAppointmentDate', 'asc')->get();
        return response()->json($sessionRequests);
    }

    // Get a specific session request by ID
    public function show($id)
    {
        $sessionRequest = SessionRequest::where('contactId', $id)
                                        ->where('requestStatus', 'pending')
                                        ->first();

        if ($sessionRequest) {
            return response()->json($sessionRequest);
        } else {
            return response()->json(['error' => 'Session request not found'], 404);
        }
    }

    // Update session request status by contact ID
    public function updateStatusByContactId($contactId)
    {
        $updated = SessionRequest::where('contactId', $contactId)
                                 ->update(['requestStatus' => 'pending']);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Session request status updated.']);
        } else {
            return response()->json(['error' => 'Session request not found or already updated'], 404);
        }
    }

    // Get session request by mobile number
    // public function getSessionRequestByNumber($mobile)
    // {
    //     $sessionRequest = SessionRequest::where('mobile', $mobile)
    //                                     ->where('requestStatus', 'pending')
    //                                     ->first();

    //     if ($sessionRequest) {
    //         return response()->json($sessionRequest);
    //     } else {
    //         return response()->json(['error' => 'Session request not found'], 404);
    //     }
    // }

    // Delete a session request by ID
    public function destroy($id)
    {
        $deleted = SessionRequest::where('id', $id)->delete();

        if ($deleted) {
            return response()->json(['success' => true, 'message' => 'Session request deleted.']);
        } else {
            return response()->json(['error' => 'Session request not found'], 404);
        }
    }

    // Get all pending session requests
    public function getAllPendingRequest()
    {
        $sessionRequests = SessionRequest::where('requestStatus', 'pending')->get();
        return response()->json($sessionRequests);
    }

    // Change the status of a session request by mobile number
    public function changeStatus(Request $request, $mobile)
    {
        $status = $request->input('status');
        $updated = SessionRequest::where('mobile', $mobile)
                                 ->update(['requestStatus' => $status]);

        if ($updated) {
            return response()->json(['success' => true, 'message' => 'Session request status changed.']);
        } else {
            return response()->json(['error' => 'Session request not found or already updated'], 404);
        }
    }

//get by mobolie number
   
    

}
