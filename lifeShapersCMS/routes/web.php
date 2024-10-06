<?php

use  App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SessionRequestController;

Route::get('/', function () {
    return view('dashboard');
});


Route::post('/login', [AdminController::class, 'login']);
Route::post('/logout', [AdminController::class, 'logout']);


//contact routes

Route::get('/contacts/add-contact-page', function(){
    return view('addProspect');
});

// Option 2: Use a closure and call the method
Route::get('/contacts/view-prospect-list', function () {
    $prospects = (new ContactController)->getAllProspects();
    return view('prospectList', ['prospects' => $prospects]);
});

Route::get('/add-session-request-form', function () {
    $prospects = (new ContactController)->getAllProspects();
    return view('addSessionRequestForm', ['contactList' => $prospects]);
});

Route::get('/contacts/get-all-prospects', [ContactController::class, 'getAllProspects']);
Route::post('/add-new-prospect', [ContactController::class, 'addContact']);
Route::get('/contacts/{id}', [ContactController::class, 'getContactById']);
Route::get('/getContactByMobileNumber/{mobile}', [ContactController::class, 'getContactByMobile']); //used in session request
Route::put('/contacts/{id}/convert', [ContactController::class, 'convertToClient']);
Route::put('/contacts/{id}/update-status', [ContactController::class, 'updateStatusToClient']);
Route::get('/contacts/active-clients', [ContactController::class, 'getAllActiveClients']);
Route::post('/contacts/status-activity', [ContactController::class, 'updateStatusActivity']);
Route::get('/gettoken',  function()
{
    return csrf_token(); 
}
);

//Session - request routes

Route::get('/session-requests', [SessionRequestController::class, 'index']); // Get all session requests
Route::get('/session-requests/{id}', [SessionRequestController::class, 'show']); // Get session request by ID
Route::post('/add-new-session-request', [SessionRequestController::class, 'store']); // Add new session request
Route::put('/session-requests/status/{contactId}', [SessionRequestController::class, 'updateStatusByContactId']); // Update status by contact ID
Route::put('/session-requests/change-status/{mobile}', [SessionRequestController::class, 'changeStatus']); // Change status by mobile number
Route::delete('/session-requests/{id}', [SessionRequestController::class, 'destroy']); // Delete session request by ID
Route::get('/session-requests/pending', [SessionRequestController::class, 'getAllPendingRequest']); // Get all pending session requests
