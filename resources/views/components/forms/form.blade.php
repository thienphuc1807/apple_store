<form {{$attributes->merge(["class"=>"text-[15px]","method"=>"GET"])}}>
    @if ($attributes->get('method','GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    {{$slot}}
</form>