<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.dashboard.main',[
            'admins' => Admin::all()
        ]);
    }
}
