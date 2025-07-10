<x-custom-select :attributes="$attributes">
    @if($attributes->has('placeholder'))
        <option value
            {{ $value === null ? 'selected' : '' }}
            {{ $attributes->has('required') ? 'value' : '' }}
            {{ $attributes->has('required') ? 'disabled' : '' }}
        >{{ $attributes->get('placeholder') }}</option>
    @endif
    @foreach($countries as $id => $label)
        <option
            value="{{ $id }}"
            {{ $value !== null && $id == $value ? 'selected' : '' }}
        >{{ $label }}</option>
    @endforeach
</x-custom-select>
