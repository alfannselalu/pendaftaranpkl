<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\dataAgenda;
use Illuminate\Support\Facades\Auth;

class AgendaSiswaController extends Controller
{
    public function index()
    {
        return view('siswa.agenda.dataAgenda.index', [
            // 'users' => User::where('id', Auth::user()->id)->with('data_agendas')->get(),
            'data_agendas' => dataAgenda::with(['user','kategori_agendas'])->get()
        ]);
    }
}
