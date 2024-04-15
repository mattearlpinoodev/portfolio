<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreventOwnAccountDeletion
{
    public function handle(Request $request, Closure $next)
    {
        $userId = $request->route('role'); 
        $user = Auth::user();

        if ($user && $userId == $user->id) {
            abort(403, 'You cannot delete your own account.');
        }

        return $next($request);
    }
}
