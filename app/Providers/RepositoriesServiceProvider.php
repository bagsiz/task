<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $models = array(
            'Task',
        );

        foreach ($models as $model) {
            $this->app->bind("App\\Repositories\\Interfaces\\{$model}RepositoryInterface", "App\\Repositories\\{$model}Repository");
        }
    }
}
