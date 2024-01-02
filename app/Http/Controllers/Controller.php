<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

    /**
    * @OA\Info(
    *      version="1.0.0",
    *      title="API Documentation for Aresto Project",
    *      description="By Sulaslan Setiawan || I am currently developing a web API to build a microservices-based application. The web API serves as a central component for communication and data exchange among various microservices within the application architecture. By leveraging the principles of microservices, this API facilitates the creation of loosely-coupled, independently deployable services that collectively contribute to the overall functionality of the application.",
    *      @OA\Contact(
    *          email="sulaslansetiawan3@gmail.com"
    *      ),
    *      @OA\License(
    *          name="Apache 2.0",
    *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
    *      )
    * )
    *
    * @OA\Server(
    *      url=L5_SWAGGER_CONST_HOST,
    *      description="API Documentation for Aresto Project"
    * )
    */


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
