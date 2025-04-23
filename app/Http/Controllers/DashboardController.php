<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Session $session)
    {
        $user = $request->user();
        if ($user == null) {
            return redirect()->route('login');
        } else {
            return view('dashboard', [
                'session' => $session,
            ]);
        }
    }
}
