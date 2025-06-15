<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supportedLanguages = array_keys(config('languages.supported'));
        $defaultLanguage = config('languages.default');
        $routeLocale = $request->route('locale');

        if ($routeLocale && !in_array($routeLocale, $supportedLanguages)) {
             // サポートされていない言語コード
            abort(404);
        }

        $cookieLocale = $request->cookie('app_locale');
        if ($cookieLocale && !in_array($cookieLocale, $supportedLanguages)) {
            // 不正なクッキーは無視
            $cookieLocale = '';
        }

        // topページへのリクエスト
        if ($request->path() == '/') {
            if ($cookieLocale) {
                $locale = $cookieLocale;
            } else {
                $locale = $this->getDefaultLanguage($supportedLanguages, $defaultLanguage);
            }
            return redirect('/' . $locale);
        }

        $locale = $routeLocale ?: $this->getDefaultLanguage($supportedLanguages, $defaultLanguage);
        App::setLocale($locale);

        return $next($request);
    }

    private function getDefaultLanguage($supportedLanguages, $defaultLanguage)
    {
        $language = request()->getPreferredLanguage($supportedLanguages);
        if (!$language) {
            $language = $defaultLanguage;
        }
        return $language;
    }
}
