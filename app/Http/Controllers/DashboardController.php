<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        switch (auth()->user()->role) {
            case 'admin':
                # code...
                return redirect()->route('admin.dashboard');
                break;

            case 'instructor':
                # code...
                return redirect()->route('instructor.dashboard');
                break; 

            case 'member':
                # code...
                return redirect()->route('member.dashboard');
                break;

            default:
                # code...
                return redirect()->route('login');
                break;
        }
    }
}
