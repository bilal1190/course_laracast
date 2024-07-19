<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\job;


// There is 2 methode to route a data but its not make sence or good practice to declar a class in route file so that why--
// we use a modle file (MODEL MEANS MVC )  




// THE 2nd is declar data in out of function and then set in function 
$contacts = [
    
        [
            'id' => 1,
            'name' => 'Bilal Hamza',
            'phone' => '65656566213',

        ],
        [
            'id' => 2,
            'name' => 'Dil Khan',
            'phone' => '65444566213',

        ],
        [
            'id' => 3,
            'name' => 'Sana Naz',
            'phone' => '65789566213',
            
        ]
    

];



Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs', function ()  {
    return view('jobs', [
        
        'jobs' =>  job::all()

    ]);
});

Route::get('/jobs/{id}', function ($id)  {

        $job = job::find($id);

         return view('job',['job'=> $job]);
});


Route::get('/contacts', function () use ($contacts) {
    return view('contacts',[

        'contacts' => $contacts

    ]);

});

Route::get('/contacts/{id}', function ($id) use ($contacts){
   
        $contact = Arr::first($contacts, fn($contact) => $contact['id'] == $id );
        return view('contact',[ 'contact' => $contact] );
});
