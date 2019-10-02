<?php

Route::prefix('auth')->group(function () {
    Route::post('/login', 'AuthControllerApi@login');
    Route::post('/check', 'AuthControllerApi@checkAuth');
    Route::post('/register', 'AuthControllerApi@register');

//    Route::get('/profile', 'AuthControllerApi@profile')->middleware('auth');
    Route::post('/logout', 'AuthControllerApi@logout');
    Route::resource('/profile', 'ProfileApiController');

});

Route::prefix('cat')->group(function () {
    Route::get('/medicalFC/{id}', 'MedicalSpecialtyAPIController@medicalFields');
});

Route::resource('medicalBoards', 'MedicalBoardApiController');
Route::resource('employs', 'EmployAPIController');
Route::post('employs/update', 'EmployAPIController@update');
//}
Route::resource('requestSpecialists', 'RequestSpecialistApiController');

Route::resource('acceptRequestSpecialists', 'AcceptRequestApiController');

Route::post('userAcceptRequestSpecialists', 'AcceptRequestApiController@userAccept');

Route::resource('medicalFields', 'MedicalFieldAPIController');

Route::resource('medicalSpecialties', 'MedicalSpecialtyAPIController');

Route::resource('emergencyServiceds', 'EmergencyServicedAPIController');





Route::resource('pharmacies', 'PharmacyAPIController');