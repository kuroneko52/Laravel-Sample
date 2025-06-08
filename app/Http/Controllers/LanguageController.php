<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Helpers\LogHelper;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        App::setLocale($locale);
        session(['applocale' => $locale]);

        LogHelper::debug('debug_log: ' . $locale);

        return redirect()->back();
    }
}
