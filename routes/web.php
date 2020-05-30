<?php

use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','pagesController@home')->name('root_path');


Route::get('/about', [
 'as' => 'about_path',
 'uses' => 'pagesController@about'
]);

Route::get('/contact','ContactsController@create')->name('contact.path');

Route::post('/contact','ContactsController@store')->name('contact_path');

Route::get('/test-email', function(){
   //return new ContactMessageCreated('Kossi Tsolegnagbo', 'kossi.tsolegnagbo@aisec.net', 'Merci, voici mon message ic !!!');
});