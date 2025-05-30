<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Carbon\Carbon;

class TrackVisitor
{
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $path = $request->path();
        $today = Carbon::today();

        // Cek apakah sudah tercatat hari ini
        $alreadyVisited = Visitor::where('ip', $ip)
            ->where('path', $path)
            ->whereDate('visited_at', $today)
            ->exists();

        if (! $alreadyVisited) {
            Visitor::create([
                'ip' => $ip,
                'path' => $path,
                'visited_at' => $today,
            ]);
        }

        return $next($request);
    }
}
