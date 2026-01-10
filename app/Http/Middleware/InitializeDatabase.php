<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\HttpFoundation\Response;

class InitializeDatabase
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $flagFile = '/tmp/db-setup-needed';
        
        if (file_exists($flagFile)) {
            try {
                // Run migrations
                Artisan::call('migrate', ['--force' => true]);
                
                // Run seeders
                Artisan::call('db:seed', ['--force' => true]);
                
                // Remove flag file
                @unlink($flagFile);
            } catch (\Exception $e) {
                // Log error but don't crash - maybe log to error_log
                error_log("Database setup failed: " . $e->getMessage());
            }
        }
        
        return $next($request);
    }
}
