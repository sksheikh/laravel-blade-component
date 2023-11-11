@props(['type' => 'danger', 'message'])
<div>
    <span {{ $attributes->merge(['class' => 'text-'.$type]) }}>
        {{ $message }}
    </span>
</div>
