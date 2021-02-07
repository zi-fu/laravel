<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('hello', function($attribute, $value, $parameters, $validator){
            return $value % 2 == 0;
        });
        // $validator = $this->app['validator'];
        // $validator->resolver(function($translator, $data, $rules, $messages){
        //     return new HelloValidator($translator, $data, $rules, $messages);
        // });
    }
}
