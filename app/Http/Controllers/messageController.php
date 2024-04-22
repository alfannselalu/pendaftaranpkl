<?php

namespace App\Http\Controllers;

use App\Models\messageModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class messageController extends Controller
{

    public function index($id, $messageId)
    {
        $userId = Auth::user()->id;
    
        $message = messageModel::where('recipient_id', $userId)
            ->where('id', $messageId)
            ->first();
    
        if (!$message) {
            return redirect()->back()->with('error', 'Message not found.');
        }
    
        $data = messageModel::where('recipient_id', $userId)
            ->where('id', $messageId)
            ->first();
    
        if (!$data) {
            return redirect()->back()->with('error', 'Message not found.');
        }
    
        if (!isset($data->sertifikat)) {
            return redirect()->back()->with('error', 'Sertifikat not found.');
        }
    
        $file = $data->sertifikat;
    
        return view('siswa.message', [
            'user' => User::find($userId),
            'messages' => [$message], // Wrap the message in an array to maintain consistency with the view
            'data' => [$data], // Wrap the message in an array to maintain consistency with the view
            'file' => $file, // Pass the file name with the correct parameter name
        ]);
    }  

    public function downloadSerti($filename)
    {
        $path = public_path('assets/' . $filename);
    
        if (!file_exists($path)) {
            abort(404);
        }
    
        $headers = [
            'Content-Type' => 'application/pdf',
        ];
    
        $newFilename = 'Sertifikat' . $filename;
    
        return response()->download($path, $newFilename, $headers);
    }
    
    public function viewFile($id)
    {
        $message = messageModel::find($id);
    
        if (!$message) {
            abort(404);
        }
    
        $pdfPath = public_path('assets/' . $message->sertifikat);
    
        if (!file_exists($pdfPath)) {
            abort(404);
        }
        return response()->stream(
            function () use ($pdfPath) {
                readfile($pdfPath);
            },
            200,
            ['Content-Type' => 'application/pdf']
        );
        
    }
    

}
