<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLanguage($lang)
    {
        App::setLocale($lang);

        session(['applocale' => $lang]);

        return redirect()->back();
    }
}
