@foreach($children as $submenu)
<ul class="sub-menu">
    @if(count($submenu->children))
    <li><a href="{{route('menucontent', ['id'=> $submenu->id, 'slug'=>$submenu->title])}}">{{$submenu->title}}<i class="fa fa-angle-right"></i></a>

            @include('home.menutree', ['children'=> $submenu->children])

    </li>
    @else
    <li><a href="{{route('menucontent', ['id'=> $submenu->id, 'slug'=>$submenu->title])}}">{{$submenu->title}}</a></li>
    @endif
</ul>
@endforeach