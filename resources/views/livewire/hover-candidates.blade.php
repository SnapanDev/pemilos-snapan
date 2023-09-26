<div wire:poll.2s="setHover" class="{{ $class }}">
    @if ($hover)
        <img src="{{ asset($imageSrc) }}" alt="" />
    @else
        <img src="{{ asset($imageChange) }}" alt="" />
    @endif
</div>
