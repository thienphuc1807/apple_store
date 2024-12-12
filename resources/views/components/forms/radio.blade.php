@props(['id' , 'name' , 'label' ,'checked'=>false])
<div class="flex items-center">
        <input class="w-5 h-5" type="radio" name="{{$name}}" id="{{$id}}" value="{{$id}}" {{$checked ? "checked" : ""}}>
    <label class="ml-2 cursor-pointer" for="{{$id}}">{{$label}}</label>
</div>