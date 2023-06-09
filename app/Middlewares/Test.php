<?php
namespace App\Middlewares;
use Haley\Router\Middleware;

class Test extends Middleware
{
    public function example()
    {
        if(request()->session()->has('example')) {
            return $this->continue();
        }

        return $this->abort(403);
    }
}