<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $userName = " Evelyn Hugo ";

    //Titolo iconcina TITLE
    $The_Seven_Husbands_of_Evelyn_Hugo = "The Seven Husbands of Evelyn Hugo";

    return view("Home", compact("userName","The_Seven_Husbands_of_Evelyn_Hugo")); //Titolo iconcina
});


Route::get('/Personaggi', function(){
    $The_Seven_Husbands_of_Evelyn_Hugo = "Personaggi";
    return view("Personaggi", compact("The_Seven_Husbands_of_Evelyn_Hugo"));

});


Route::get('/About Author', function(){
    $The_Seven_Husbands_of_Evelyn_Hugo = "About Author";
    return view("About Author", compact("The_Seven_Husbands_of_Evelyn_Hugo"));
});