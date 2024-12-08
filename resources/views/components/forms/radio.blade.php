@props(['id' , 'name' , 'label'])
<div class="flex items-center">
    <input class="w-5 h-5" type="radio" name="{{$name}}" id="{{$id}}" value="{{$id}}">
    <label class="ml-2 cursor-pointer" for="{{$id}}">{{$label}}</label>
</div>