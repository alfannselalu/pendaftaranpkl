<?php

namespace App\Http\Controllers;

use App\Models\KoordinatorPKL;
use Illuminate\Http\Request;
use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;

class KoordinatorDashboard extends Controller
{
    public function koordinatorDashboard()
    {
        return view('koorPKL.dashboard.dashboard',[
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
    }
}
