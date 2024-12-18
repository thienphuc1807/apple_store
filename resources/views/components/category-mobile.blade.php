<div class="bg-white lg:hidden block">
    <ul class="flex flex-wrap justify-around">
        @foreach ($categories as $category)       
        <li>
            <a href="/{{$category->slug}}" class="inline-block py-3 px-1">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</div>