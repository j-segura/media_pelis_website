@props(['active'])

@php
    $classes = ($active ?? false)? 'link_active_admin ' : 'link_admin';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

