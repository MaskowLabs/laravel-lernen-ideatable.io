@props([
    'type' => 'default',
    'actionType' => 'button',
    'href' => false
])

<{{ $href ? 'a' : 'button' }}
    type="{{ $actionType }}" 
    @class([ "btn btn-{$type}" ]) 
    @if($href) 
        href="{{ $href }}" 
        wire:navigate 
    @endif
    {{ $attributes }}
>
    {{ $slot }}
</{{ $href ? 'a' : 'button' }}>