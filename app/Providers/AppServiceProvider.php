<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Visitor;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // if (env('APP_ENV') != 'local') {
        //     $this->app['request']->server->set('HTTPS', true);
        // }
        // Statistik waktu
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();
        $startOfWeek = Carbon::now()->startOfWeek();
        $startOfMonth = Carbon::now()->startOfMonth();
        $startOfYear = Carbon::now()->startOfYear();

        // Query
        $statToday = Visitor::whereDate('visited_at', $today)->count();
        $statYesterday = Visitor::whereDate('visited_at', $yesterday)->count();
        $statWeek = Visitor::whereBetween('visited_at', [$startOfWeek, now()])->count();
        $statMonth = Visitor::whereBetween('visited_at', [$startOfMonth, now()])->count();
        $statYear = Visitor::whereBetween('visited_at', [$startOfYear, now()])->count();
        $statTotal = Visitor::count();

        // Share ke semua view
        view()->share('visitorStats', [
            'today' => $statToday,
            'yesterday' => $statYesterday,
            'week' => $statWeek,
            'month' => $statMonth,
            'year' => $statYear,
            'total' => $statTotal,
        ]);
    }
}
