<?php

namespace DistortedFusion\BladeForms\Components\Concerns;

use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ViewErrorBag;

trait HandlesValidationErrors
{
    public bool $showErrors = true;
    public bool $markRequired = false;

    /**
     * Determine if an error is set.
     *
     * @param string $name
     * @param string $bag
     *
     * @return bool
     */
    public function hasError(string $name, string $bag = 'default'): bool
    {
        $errorBag = $this->getErrorBag($bag);

        return $errorBag->has($name);
    }

    /**
     * Determine if an error is set and should be shown.
     *
     * @param string $name
     * @param string $bag
     *
     * @return bool
     */
    public function hasErrorAndShow(string $name, string $bag = 'default'): bool
    {
        return $this->showErrors
            ? $this->hasError($name, $bag)
            : false;
    }

    /**
     * Get the error message bag.
     *
     * @param string $bag
     *
     * @return MessageBag
     */
    protected function getErrorBag(string $bag = 'default'): MessageBag
    {
        $bags = View::shared('errors', fn () => request()->session()->get('errors', new ViewErrorBag()));

        return $bags->getBag($bag);
    }
}
