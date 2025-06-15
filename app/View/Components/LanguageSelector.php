<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LanguageSelector extends Component
{
    public $languages;
    public $currentLocale;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->languages = config('languages.supported');
        $this->currentLocale = app()->getLocale();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.language-selector');
    }
}
