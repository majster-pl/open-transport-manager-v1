<?php

namespace App\Providers;

use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dashboard $dashboard)
    {
        $permissions_inbound = ItemPermission::group('Inbound Jobs')
        ->addPermission('create', 'Create')
        ->addPermission('delete', 'Delete')
        ->addPermission('edit', 'Edit')
        ->addPermission('view', 'View');

        $permissions_outbound = ItemPermission::group('Outbound Jobs')
        ->addPermission('create', 'Create')
        ->addPermission('delete', 'Delete')
        ->addPermission('edit', 'Edit')
        ->addPermission('view', 'View');


        $dashboard->registerPermissions($permissions_inbound);
        $dashboard->registerPermissions($permissions_outbound);


    }
}
