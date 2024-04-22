<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\UserDetails;
use App\Models\messageModel;
use Illuminate\Http\Request;
use App\Models\PenerimaanPKL;
use App\Models\KoordinatorPKL;
use App\Http\Controllers\Controller;

class PenerimaanPKLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('koorPKL.dataTables.dataStatusPrakerin.index', [
        //     'users' => User::with('department')->get(),
        //     'user_details' => UserDetails::all()
        // ]);

        return view('koorPKL.dataTables.dataStatusPrakerin.index', [
            // 'user_details' => UserDetails::all()
            'users' => User::with('department')->filter()->get(),
            'koordinator_p_k_l_s' => KoordinatorPKL::with('department')->get()
        ]);
    }


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('koorPKL.dataTables.dataStatusPrakerin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'status' => 'required|in:Diterima,Ditolak',
        // ]);

        // PenerimaanPKL::create($request->all());

        // return redirect('/penerimaan-pkl')->with('success', 'Data penerimaan PKL berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PenerimaanPKL $penerimaanPKL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenerimaanPKL $penerimaanPKL, $id)
    {
        // $users = User::find($id);

        // return view('koorPKL.dataTables.dataStatusPrakerin.edit', [
        //     'users' => $users,
        //     'user' => User::all()
        // ]);

        // $users = User::find($id);
        $users = User::find($id);
        return view('koorPKL.dataTables.dataStatusPrakerin.edit', [
            'users' => $users,
            'user' => User::all()
        ]);
    }
    // return view('koorPKL.dataTables.dataStatusPrakerin.edit', compact('users'));
    // 'users' => User::all(),
    
    /**
     * Update the specified resource in storage.
     */public function update(Request $request, PenerimaanPKL $penerimaanPKL, $id)
        {
            // $request->validate([
            //     'status' => 'required|in:0,Ditolak,Diterima',
            // ]);

            // $users = User::find($id);

            // $users->status = $request->status;
            // $users->save();

            // $message = '';

            // if ($request->status == 'Ditolak') {
            //     $message = 'Maaf, permohonan Anda untuk PKL telah ditolak.';
            // } elseif ($request->status == 'Diterima') {
            //     $message = 'Selamat, permohonan Anda untuk PKL telah diterima.';
            // }

            // // Teruskan pesan ke dashboard siswa
            // return redirect('/penerimaan-pkl')->with('success', 'Status berhasil diperbarui')->with('status_message', $message);

            $request->validate([
                'status' => 'required|in:0,Ditolak,Diterima',
            ]);
    
            $users = User::find($id);
    
            $users->status = $request->status;
            $users->save();
    
            return redirect('/penerimaan-pkl')->with('success', 'Status berhasil diperbarui');
        }


        public function sendMessage(Request $request, $recipientId)
        {
            $request->validate([
                'judul' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'sertifikat' => 'nullable|mimes:pdf', 
            ]);
        
            $sender = auth()->user();
            $recipient = User::find($recipientId);
        
            if (!$recipient) {
                return redirect()->back()->with('error', 'Recipient not found.');
            }
        
            $file = $request->sertifikat;
            if ($file) {
                $originalFileName = $file->getClientOriginalName(); // Ambil nama asli file
                $file->move('assets', $originalFileName); // Simpan file dengan nama asli
            }
        
            $data = new messageModel();
            $data->sertifikat = $originalFileName ?? null; // Simpan nama file asli jika diunggah
            $data->sender_id = $sender->id;
            $data->recipient_id = $recipient->id;
            $data->judul = $request->judul;
            $data->deskripsi = $request->deskripsi;
        
            $data->save();
            return redirect('/penerimaan-pkl')->with('success', 'Data berhasil disimpan.');
        }
        
                
                
        
        public function showNotification($recipientId, $messageId)
        {
            $message = messageModel::find($messageId);
        
            if (!$message) {
                return redirect()->back()->with('error', 'Message not found.');
            }
        
            if ($message->recipient_id != $recipientId) {
                return redirect()->back()->with('error', 'Unauthorized access to this message.');
            }
        
            return view('siswa.message', ['messages' => $message]);
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenerimaanPKL $penerimaanPKL)
    {
        //
    }
}
