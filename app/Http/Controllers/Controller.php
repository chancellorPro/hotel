<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @SWG\Swagger(
 *   schemes={"http"},
 *   host="localhost:8000",
 *   basePath="/",
 *   @SWG\Info(
 *     title="Hotel checkin API",
 *     version="1.0.0"
 *   )
 * )
 */
class Controller extends BaseController
{
    public $successStatus = 200;
    public $createdStatus = 201;
    public $unauthorisedStatus = 401;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
