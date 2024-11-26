<form {{$attributes->merge(["class"=>"flex-1 text-[15px]","method"=>"GET"])}}>
    @if ($attributes->get('method','GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    {{$slot}}
</form>