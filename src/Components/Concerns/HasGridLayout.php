<?php

namespace DistortedFusion\BladeForms\Components\Concerns;

use Illuminate\View\ComponentAttributeBag;

trait HasGridLayout
{
    protected array $gridColumns = [
        'default' => 1,
        'sm' => null,
        'md' => null,
        'lg' => null,
        'xl' => null,
        '2xl' => null,
    ];

    public function gridColumns(array|int|string $columns): static
    {
        if (! is_array($columns)) {
            $columns = [
                'lg' => intval($columns),
            ];
        }

        $this->gridColumns = [
            ...$this->gridColumns,
            ...$columns,
        ];

        return $this;
    }

    public function getGridColumns(string $breakpoint): ?int
    {
        if (! isset($this->gridColumns[$breakpoint])) {
            return null;
        }

        return $this->gridColumns[$breakpoint];
    }

    public function getGridAttributeBag(): ComponentAttributeBag
    {
        return new ComponentAttributeBag([
            'default' => $this->getGridColumns('default'),
            'sm' => $this->getGridColumns('sm'),
            'md' => $this->getGridColumns('md'),
            'lg' => $this->getGridColumns('lg'),
            'xl' => $this->getGridColumns('xl'),
            'twoXl' => $this->getGridColumns('2xl'),
        ]);
    }
}
