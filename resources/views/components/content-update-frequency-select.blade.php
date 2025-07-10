<x-custom-select :attributes="$attributes">
    @foreach($contentUpdateFrequencies as $id => $label)
        <option value="{{ $id }}" {{ $value !== null && $id == $value ? 'selected' : '' }}>{{ $label }}</option>
    @endforeach
</x-custom-select>
