<?php
declare(strict_types=1);

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return 'this api is working';
});*/

Route::post('product', [ProductController::class,'createData']);

?>
