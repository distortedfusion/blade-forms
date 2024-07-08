<?php

namespace DistortedFusion\BladeForms\Components\Concerns;

use Illuminate\View\ComponentAttributeBag;

trait CanSpanColumns
{
    protected array $columnSpan = [
        'default' => 1,
        'sm' => null,
        'md' => null,
        'lg' => null,
        'xl' => null,
        '2xl' => null,
    ];

    protected array $columnStart = [
        'default' => null,
        'sm' => null,
        'md' => null,
        'lg' => null,
        'xl' => null,
        '2xl' => null,
    ];

    public function columnSpan(array|int|string $span): static
    {
        if (! is_array($span)) {
            $span = ['sm' => $span];
        }

        $this->columnSpan = [
            ...$this->columnSpan,
            ...$span,
        ];

        return $this;
    }

    public function getColumnSpan(string $breakpoint): ?string
    {
        if (! isset($this->columnSpan[$breakpoint])) {
            return null;
        }

        $span = $this->columnSpan[$breakpoint];

        if ($span === 'full') {
            return '1 / -1';
        }

        return "span {$span} / span {$span}";
    }

    public function columnStart(array|int $start): static
    {
        if (! is_array($start)) {
            $start = ['default' => $start];
        }

        $this->columnStart = [
            ...$this->columnStart,
            ...$start,
        ];

        return $this;
    }

    public function getColumnStart(string $breakpoint): ?int
    {
        if (! isset($this->columnStart[$breakpoint])) {
            return null;
        }

        return $this->columnSpan[$breakpoint];
    }

    public function getColumnAttributeBag(): ComponentAttributeBag
    {
        return new ComponentAttributeBag([
            'default' => $this->getColumnSpan('default'),
            'sm' => $this->getColumnSpan('sm'),
            'md' => $this->getColumnSpan('md'),
            'lg' => $this->getColumnSpan('lg'),
            'xl' => $this->getColumnSpan('xl'),
            'twoXl' => $this->getColumnSpan('2xl'),

            'defaultStart' => $this->getColumnStart('default'),
            'smStart' => $this->getColumnStart('sm'),
            'mdStart' => $this->getColumnStart('md'),
            'lgStart' => $this->getColumnStart('lg'),
            'xlStart' => $this->getColumnStart('xl'),
            'twoXlStart' => $this->getColumnStart('2xl'),
        ]);
    }
}
