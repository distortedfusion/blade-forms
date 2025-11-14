<?php

namespace DistortedFusion\BladeForms;

class BladeForms
{
    /**
     * Resolve the component alias with the optional prefix.
     *
     * @param string $alias
     *
     * @return string
     */
    public static function componentAliasWithPrefix(string $alias): string
    {
        $prefix = config('blade-forms.prefix', null);

        if (is_null($prefix) || trim($prefix) === '') {
            return $alias;
        }

        return $prefix.'-'.$alias;
    }
}
