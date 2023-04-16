<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/students', 
    function () {
        $user = [
            'student1' => 'hala',
            'student2' => 'sara',
            'student3' => 'somia',
            'student4' => 'marwa',
            'student5' => 'shimaa',
            
        ];
      return view ('task1' , $user);
    }
);