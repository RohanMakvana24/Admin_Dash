<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /** NOTE ~ Show Admin Dashbaord */
    public function showAdminDashboard()
    {
        return view('admin.dashboard.index');
    }
}
