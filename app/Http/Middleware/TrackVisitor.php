<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (
            $request->isMethod('GET') &&
            !$request->is('admin/*') &&
            !$request->is('storage/*') &&
            !$request->expectsJson()
        ) {
            $visitorHash = hash(
                'sha256',
                $request->ip() . '|' . now()->toDateString() . '|' . config('app.key')
            );

            Visitor::create([
                'visitor_hash' => $visitorHash,
                'path' => '/' . ltrim($request->path(), '/'),
                'user_agent' => substr((string) $request->userAgent(), 0, 500),
                'visited_at' => now(),
            ]);
        }

        return $response;
    }
}