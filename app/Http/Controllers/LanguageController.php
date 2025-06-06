<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        App::setLocale($locale);
        $locale = App::currentLocale();

        session(['applocale' => $locale]);

        return redirect()->back();
    }
}
