<x-mail::message>
{{-- Приветствие --}}
@if (!empty($greeting))
<p>Здравейте!</p>
@else
    @if ($level === 'error')
    # @lang('Упс!')
    @else
    <p style="font-size: 24px; font-weight: 600; margin: 20px auto;">Здравейте!</p>
    @endif
@endif


{{-- Бутон за действие --}}
@isset($actionText)
<p style="text-align: center">Получавате този имейл, защото сте поискали промяна на паролата си в платформата на д-р Юлиан Молов.
    <br> 
Натиснете бутона "Промени паролата", за да продължите напред.</p>

<x-mail::button :url="$actionUrl">
Промени Паролата
</x-mail::button>
@endisset



</x-mail::message>
