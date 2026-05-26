@props([
    'name',
    'label',
    'type' => 'text',
    'placeholder' => '',
    'required' => false,
    'error' => null,
])

<div class="space-y-1">
    @if($label)
        <label for="{{ $name }}" class="form-label inline-flex">
            {{ $label }}
            @if($required)
                <span class="text-error ml-1">*</span>
            @endif
        </label>
    @endif

    @if($type === 'textarea')
        <textarea 
            name="{{ $name }}" 
            id="{{ $name }}" 
            placeholder="{{ $placeholder }}" 
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'form-input min-h-[120px] ' . ($error ? 'border-error' : '')]) }}
        >{{ $slot }}</textarea>
    @elseif($type === 'select')
        <select 
            name="{{ $name }}" 
            id="{{ $name }}" 
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'form-input appearance-none bg-no-repeat bg-[right_1rem_center] ' . ($error ? 'border-error' : '')]) }}
        >
            {{ $slot }}
        </select>
    @else
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            placeholder="{{ $placeholder }}" 
            {{ $required ? 'required' : '' }}
            {{ $attributes->merge(['class' => 'form-input ' . ($error ? 'border-error' : '')]) }}
        >
    @endif

    @if($error)
        <p class="text-error text-[11px] font-bold uppercase tracking-wider mt-1 animate-slide-up">{{ $error }}</p>
    @endif
</div>
