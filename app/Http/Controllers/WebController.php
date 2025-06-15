<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WebController extends Controller
{
    // 言語トップ
    public function index(Request $request): View
    {
                // ロケールの取得
        $locale = app()->getLocale(); // 現在のロケール
        $cookieLocale = $request->cookie('locale'); // クッキーからロケールを取得
        $preferredLocale = $request->getPreferredLanguage(['ja', 'en']); // 優先言語を取得

        return view('index', compact('locale', 'cookieLocale', 'preferredLocale'));

        #return view('index', [
        #    'locale' => app()->getLocale(),
        #    'cookieLocale' => $request->cookie('app_locale'),
        #    'preferredLocale' => request()->getPreferredLanguage(),
        #]);
    }

    // 言語セット
    public function setLanguage(Request $request, $locale)
    {
        // テストのため短めに30秒とする
        $cookie = cookie('app_locale', $locale, 30);

        // 直前のページ（実際はバリデーションして使う）
        $previousUrl = $request->input('currentPath', '/');
        $updatedUrl = preg_replace('/\/[a-z]{2}(\/|$)/', "/{$locale}", $previousUrl);

        return redirect($updatedUrl)->withCookie($cookie);
    }
}
