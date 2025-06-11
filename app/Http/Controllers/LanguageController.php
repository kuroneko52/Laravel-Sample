<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Helpers\LogHelper;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        // ローカライズされたメッセージを取得
        $booksMessage = __('messages.ui'); // messages.php に定義された 'books' の翻訳
        $authorsMessage = __('messages.ui'); // messages.php に定義された 'authors' の翻訳

        return response()->json([
            'books' => $booksMessage,
            'authors' => $authorsMessage,
        ]);
/*
        App::setLocale($locale);
        session(['applocale' => $locale]);

        LogHelper::debug('debug_log: ' . $locale);

        return redirect()->back();
 */
    }
}
