<?php



use Illuminate\Support\Facades\Route;

// Route di Home
Route::get('/', function () {

    $userName = " Evelyn Hugo ";

    //Titolo iconcina TITLE
    $The_Seven_Husbands_of_Evelyn_Hugo = "The Seven Husbands of Evelyn Hugo";

    return view("Home", compact("userName","The_Seven_Husbands_of_Evelyn_Hugo")); //Titolo iconcina
});

// Route di Personaggi
Route::get('/Personaggi', function(){
    $The_Seven_Husbands_of_Evelyn_Hugo = "Personaggi";
    return view("Personaggi", compact("The_Seven_Husbands_of_Evelyn_Hugo"));

});

// Route di About Author
Route::get('/About Author', function(){
    $The_Seven_Husbands_of_Evelyn_Hugo = "About Author";
    return view("About Author", compact("The_Seven_Husbands_of_Evelyn_Hugo"));
});

// Rout di Profile
Route::get('/Profile', function(){
    $The_Seven_Husbands_of_Evelyn_Hugo = "Il mio account";

    $user =[
        'ProfileImg' => 'https://picsum.photos/600',
        'email' => "alexis.carne@gmail.com",
        'userName' => "Alexis96",
        'age' => 29,
        'role' => "User",
        'Woman_Man' => "Woman",

    ];

    return view("Profile", compact("The_Seven_Husbands_of_Evelyn_Hugo", "user"));
});


