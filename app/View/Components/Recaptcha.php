<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Recaptcha extends Component
{

    public $clientKey;

    public $hasError;

    /**
     * Create a new component instance.
     *
     * @param bool $hasError
     */
    public function __construct(bool $hasError)
    {
        $this->clientKey = env('GOOGLE_RECAPTCHA_SITE_KEY');
        $this->hasError = $hasError;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.recaptcha');
    }
}
