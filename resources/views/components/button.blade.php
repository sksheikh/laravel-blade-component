@props(['color'])
<div>
    <button {{ $attributes->class(['btn', 'btn-danger' => true])->merge(['type' => 'submit']) }} >
        {{ $slot }}
    </button>
</div>
