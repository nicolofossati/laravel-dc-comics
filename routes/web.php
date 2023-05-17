<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;
use App\Http\Controllers\ComicController;


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

Route::get('/', [PageController::class, 'index'])->name('home');
/*quando la rotta è root (/) voglio che venga gestito dal metodo index di PageController
Se volessi creare nuove rotte specifiche basta aggiungere manualmente: Roure::get('/cicciobello')
o meglio ancora delegarlo sempre al PageContoller ad un metodo custom:
Route::get('/cicciobello', [PageController::class, 'cicciobello'])->name('cicciobello');
e in PageController aggiungo il metodo
public function cicciobello(){
    //faccio quello che voglio qua, ma solitamente
    return view('welcome');
}
*/

Route::resource('comics', ComicController::class);