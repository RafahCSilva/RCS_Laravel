<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @SWG\Swagger(
 *   basePath="/",
 *   host=L5_SWAGGER_CONST_HOST,
 *   schemes={"http"},
 *   produces={"application/json"},
 *   consumes={"application/json"},
 *   @SWG\Info(
 *     version="1.0.0",
 *     title="API RCS_Laravel",
 *     description="API RCS_Laravel",
 *     termsOfService="http://swagger.io/terms/",
 *     @SWG\Contact(name="RCS_Laravel API Team"),
 *     @SWG\License(name="Copyright")
 *   ),
 *   @SWG\Definition(
 *     definition="ErrorModel",
 *     type="object",
 *     required={"code", "message"},
 *     @SWG\Property(
 *       property="code",
 *       type="integer",
 *       format="int32"
 *     ),
 *     @SWG\Property(
 *       property="message",
 *       type="string"
 *     )
 *   )
 * )
 **/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
