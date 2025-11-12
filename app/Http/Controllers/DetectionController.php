<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detection;
use Illuminate\Support\Facades\Http;

class DetectionController extends Controller
{
    public function index()
    {
        return view('detect');
    }

    public function detect(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png'
        ]);

        // Simpan gambar sementara
        $path = $request->file('image')->store('uploads', 'public');

        // Kirim ke model AI (nanti diganti link dari Ceces)
        // contoh endpoint: http://127.0.0.1:5000/predict
        // $response = Http::attach('file', file_get_contents($request->file('image')), $request->file('image')->getClientOriginalName())
        //                 ->post('http://127.0.0.1:5000/predict');
        // $result = $response->json()['label'] ?? 'Unknown';

        $result = "Plastik"; // sementara dummy hasil

        // Simpan ke database
        Detection::create([
            'image_path' => $path,
            'result' => $result
        ]);

        return view('detect', compact('result', 'path'));
    }
}
