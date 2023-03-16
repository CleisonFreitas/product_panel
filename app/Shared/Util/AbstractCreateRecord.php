<?php
declare(strict_types=1);
namespace App\Shared\Util;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

abstract class AbstractCreateRecord
{
    public function handler(Model $model)
    {
        try{
            if($model->save()){ return $model; }
        } catch (\Exception $ex){
            return response()->json($ex,404);
        }
    }
}

?>
