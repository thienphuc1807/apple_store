@props(['active'])

<a {{$attributes}} class="{{$active ? "text-white" : "text-apple_color"}} block py-[22px] px-[16px] hover:text-white hover:bg-apple_color_hover">
    {{$slot}}
</a>