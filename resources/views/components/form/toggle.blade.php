<div {!! $attributes->merge(['class' => 'flex flex-col']) !!}>
    <div class="flex items-start">
        <label class="form-toggle flex-shrink-0 h-6 w-11 inline-block relative">
            <input class="opacity-0 w-0 h-0"
                id="{{ $name }}"
                type="checkbox"
                value="{{ $value }}"

                @if($isWired())
                    wire:model{!! $wireModifier() !!}="{{ $name }}"
                @else
                    name="{{ $name }}"
                @endif

                @if($checked)
                    checked="checked"
                @endif

                @if($disabled)
                    disabled
                @endif
            />
            {{-- Slider Container --}}
            <div class="slider border border-transparent bg-gray-300 shadow-inner cursor-pointer absolute inset-0 ring-0 ring-brand-500 ring-opacity-0 rounded-full">
                {{-- Slider Dot --}}
                <div class="slider-dot w-4 h-4 bg-white shadow rounded-full absolute -mt-2"></div>
            </div>
        </label>

        <label class="flex-grow ml-4 cursor-pointer select-none" for="{{ $name }}">
            <span class="text-sm leading-6 font-semibold">{{ $label }}</span>

            @if ($description ?? false)
                <x-form-help>{{ $description }}</x-form-help>
            @endif
        </label>
    </div>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
