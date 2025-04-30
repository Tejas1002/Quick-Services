<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function switchLang(Request $request, $locale)
    {
        $availableLocales = ['en', 'hi', 'gu'];
        $locale = in_array($locale, $availableLocales) ? $locale : config('app.locale');

        session(['locale' => $locale]);
        Cookie::queue('locale', $locale, 60 * 24 * 30);

        return redirect()->back()->with('success', 'Language switched to ' . $locale);
    }
}
