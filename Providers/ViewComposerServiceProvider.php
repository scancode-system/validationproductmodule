<?php

namespace Modules\ValidationProduct\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider {

    public function boot() {
        View::composer('validationproduct::documentation', 'App\Http\ViewComposers\Parameters\ClientValidationComposer');
    }

    public function register() {}

}
