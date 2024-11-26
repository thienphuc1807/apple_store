@props(['label','name'])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'value' => old($name), 
        'class' => 'w-full min-h-12 border border-[#EBEBEB] rounded-lg px-4 py-2'
];
@endphp

<x-forms.field :label="$label" :name="$name">
    <input {{$attributes($defaults)}}>
</x-forms.field>

