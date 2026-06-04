<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisteruserController extends Controller
{
    // Minimal stub to satisfy route registration
    public function listingofactiveusers(Request $request)
    {
        // Redirect to dashboard if called interactively
        return redirect(action('DashboardController@index'));
    }
}
