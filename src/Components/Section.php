<?php

namespace DistortedFusion\BladeForms\Components;

use DistortedFusion\BladeForms\Components\Concerns\HasGridLayout;
use Illuminate\View\Component;

class Section extends Component
{
    use HasGridLayout;

    public ?string $title;
    public ?string $description;

    /**
     * Create a new component instance.
     *
     * @param string|null      $title
     * @param string|null      $description
     * @param array|string|int $gridColumns
     */
    public function __construct(?string $title = null, ?string $description = null, array|string|int $gridColumns = [])
    {
        $this->title = $title;
        $this->description = $description;

        $this->gridColumns($gridColumns);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('blade-forms::components.section');
    }
}
