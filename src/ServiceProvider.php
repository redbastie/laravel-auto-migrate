<?php

namespace Redbastie\LaravelAutoMigrate;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands(Command::class);
        }
    }
}
