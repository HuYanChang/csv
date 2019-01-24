<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019/1/24
 * Time: 18:17
 */
namespace Cxp\Csv;

use Illuminate\Support\ServiceProvider;

class CsvServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('csv', function () {
            return new Csv();
        });
    }
}