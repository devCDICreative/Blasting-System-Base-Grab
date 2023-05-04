<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $posts = Post::all();
        return view('home.index');
    }
    public function detail()
    {
        // $posts = Post::all();
        return view('home.detail.index');
    }
    public function businessTalk()
    {
        // $posts = Post::all();
        return view('home.business-talk.index');
    }
    public function download()
    {
        $zip = new \ZipArchive();
        $fileName = 'participsants.zip';
        if ($zip->open(public_path($fileName), \ZipArchive::CREATE)== TRUE)
        {
            $files = File::files(public_path('storage/participant-qr'));
            foreach ($files as $key => $value){
               $encryptedEmail=str_replace(".jpg","",basename($value));
               $decryptedEmail=Crypt::decryptString($encryptedEmail);
               $rename=$decryptedEmail.'.jpg';

               $zip->addFile($value, $rename);
            }
            $zip->close();
        }

        return response()->download(public_path($fileName));

        // $participants=Participant::get();
        // dd($participants[0]->qr);
        // $posts = Post::all();
    }

    // public function switchLang($lang)
    // {
    //     App::setLocale($lang);
    //     session()->put('applocale', $lang);
    //     return redirect()->back();
    // }
}
