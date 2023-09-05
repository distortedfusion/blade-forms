<?php

namespace DistortedFusion\BladeForms\Components\Form;

use Illuminate\Support\Facades\URL;
use ProtoneMedia\LaravelFormComponents\Components\Component as FormComponent;

class Actions extends FormComponent
{
    public ?string $cancel;
    public bool $redirectPrevious;
    public ?string $cancelTitle;
    public ?string $submitTitle;
    public string $style;

    /**
     * Create a new component instance.
     *
     * @param string|null $cancel
     * @param bool        $redirectPrevious
     * @param string|null $cancelTitle
     * @param string|null $submitTitle
     * @param string      $style
     */
    public function __construct(string $cancel = null, bool $redirectPrevious = false, string $cancelTitle = null, string $submitTitle = null, string $style = 'primary')
    {
        $this->cancel = $cancel;
        $this->redirectPrevious = $redirectPrevious;
        $this->cancelTitle = $cancelTitle;
        $this->submitTitle = $submitTitle;
        $this->style = $style;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-forms::components.form.actions');
    }

    /**
     * Determine the cancel URL, when redirect previous is provided we'll check
     * the previous URL with the current URL and when they don't match we'll
     * prefer the previous URL.
     *
     * @return string
     */
    public function cancelUrl(): string
    {
        if (! $this->redirectPrevious) {
            return $this->cancel;
        }

        $previous = URL::previous();

        return $previous && $previous !== URL::current() ? $previous : $this->cancel;
    }
}
