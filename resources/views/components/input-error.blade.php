@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1 ul_erorrs']) }}>
        @foreach ((array) $messages as $message)
            <li class="li_errors">{{ $message }}</li>
        @endforeach
    </ul>
@endif
