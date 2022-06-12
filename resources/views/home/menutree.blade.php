@foreach($children as $submenu)
    <ul class="list-links">
        @if(count($submenu->children))
            <li style="color:#1D00AF;font-family: 'Arial Black' "> {{$submenu->title}}</li>
            <ul class="list-links">
                @include('home.menutree',['children' => $submenu->children])
            </ul>
            <hr>
        @else
            <li><a href="{{route('menucontents',['id'=>$submenu->id, 'slug'=>$submenu->title])}}">{{$submenu->title}}</a></li>
        @endif
    </ul>
@endforeach
