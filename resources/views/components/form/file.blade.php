<div class="form-file" data-file="{{ $name }}">
    <div class="h-0 overflow-hidden">
        <input type="file"
            id="{{ $name.'_file' }}"
            @if($isWired())
            wire:model{!! $wireModifier() !!}="{{ $name }}"
            @else
            name="{{ $name }}"
            @endif />
    </div>

    <x-form-label :label="$label ?? $name" :for="$name.'_file'" />

    <div class="mt-2 flex rounded-md shadow-sm dark:shadow-none">
        <input {!! $attributes->class([
                'form-input block w-full flex-grow relative cursor-pointer',
                'text-black bg-white border-gray-300 rounded-md rounded-r-none',
                'dark:text-white dark:bg-gray-900 dark:border-gray-800',
            ]) !!}
            name="{{ $name.'_placeholder' }}"
            type="text"
            readonly />
        <label class="btn btn-default cursor-pointer leading-snug inline-flex items-center w-auto h-auto rounded-l-none rounded-r-md relative shadow-none -ml-1" for="{{ $name.'_file' }}">
            {{ $action ?? __('Select file') }}
        </label>
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
