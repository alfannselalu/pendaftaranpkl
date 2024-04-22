<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;
use App\Models\messageModel;



class StatusPrakerinController extends Controller
{
    public function index()
    {
        return view('siswa.statusPrakerin.main', [
            'users' => User::where('id', Auth::user()->id)->with('department')->filter()->get()
        ]);

        // $userId = Auth::user()->id;

        // $messages = messageModel::where('recipient_id', $userId)->get();
        
        // Periksa apakah pengambilan pesan berhasil
        // if ($messages->isEmpty()) {
        //     return redirect()->back()->with('error', 'Error fetching messages.');
        // }
        
        // Anda dapat menghilangkan query yang sama di bawahnya
        // $data = messageModel::where('recipient_id', $userId)->get();
        
        // return view('siswa.statusPrakerin.main', [
        //     'users' => User::where('id', $userId)->with('department')->get(),
        //     'messages' => $messages,
        //     'data' => $messages, 
        // ]);
    }
    // 'users' => UserDetails::all(),
    // 'user' => User::find($userId),
    // 'user_details' => UserDetails::where(Auth::user()->id)->get()
    // 'users' => User::with('user_details')->get()
}
