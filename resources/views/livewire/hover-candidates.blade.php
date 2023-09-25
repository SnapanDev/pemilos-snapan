<div wire:poll.2s="setHover" class="{{ $class }}">
    @if ($hover)
        <img src="{{ $imageSrc }}" alt="" />
    @else 
        <img src="{{ $imageChange }}" alt="" />
    @endif
</div>
