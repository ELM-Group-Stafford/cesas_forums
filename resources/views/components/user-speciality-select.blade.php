<x-custom-select :attributes="$attributes">
    @if($attributes->has('placeholder'))    
        <option value
            {{ $value === null ? 'selected' : '' }}
            {{ $attributes->has('required') ? 'value' : '' }}
        >{{ $attributes->get('placeholder') }}</option>
    @endif

    @foreach($specialities->sortByDesc('pinned') as $speciality)    
    
        @if ($loop->first)
            @php
                $previousPinned = $speciality->pinned
            @endphp
        @endif

        @if($previousPinned == 1 && $speciality->pinned == 0)
            <hr>
            @php
                $previousPinned = $speciality->pinned
            @endphp
        @endif

        <option
            value="{{ $speciality->id }}"
            {{ $value !== null && $speciality->id == $value ? 'selected' : '' }}
        >{{ $speciality->name }}</option>
    @endforeach
</x-custom-select>