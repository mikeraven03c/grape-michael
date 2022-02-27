<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EntityServiceProvider extends ServiceProvider
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
        \Rinvex\Attributes\Models\Attribute::typeMap([
            'varchar' => \Rinvex\Attributes\Models\Type\Varchar::class,
            'integer' => \Rinvex\Attributes\Models\Type\Integer::class,
            'datetime' => \Rinvex\Attributes\Models\Type\Datetime::class,
        ]);
    }
}
