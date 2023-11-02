<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MailYonetim;

class MailController extends Controller
{
    public function index()
    {
        return view('include.mail-olustur');
    }

    public function MailOlusturPost(Request $request)
    {
        $request->validate([
            "baslik" => "required",
            "metin"=> "required",
            "tema"=> "required",
        ]);
        MailYonetim::create([
            "baslik" => $request->baslik,
            "metin"=> $request->metin,
            "tema"=> $request->tema,
        ]);
        return redirect()->route('toplu-mail-olusturma')->with('success', 'Mail başarıyla oluşturuldu.');
    }
}
