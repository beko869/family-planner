<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Shopping;
use App\ShoppingEntry;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post( '/add-shopping-entry', function( Request $request ){

    $update = json_decode(file_get_contents("php://input"), TRUE);

    $chatId = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];

    if( $message != '/start' )
    {
        $shoppingEntry = new ShoppingEntry();
        $shoppingEntry->create([
            'description' => $message,
            'shopping_id' => 1
        ]);
    
        file_get_contents('https://api.telegram.org/[anonymous_key]/sendmessage?chat_id='.$chatId.'&text=MUZIIIIII');
    
        return 'I added your shopping list entry :)';
    }

} );
