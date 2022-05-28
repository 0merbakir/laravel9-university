@foreach($children as $submenu)

@if(count($submenu->children))
<li><a href="{{route('menucontent', ['id'=> $submenu->id, 'slug'=>$submenu->title])}}">{{$submenu->title}}<i class="fa fa-angle-right"></i></a>
    <ul class="sub-menu">
        @include('home.menutree', ['children'=> $submenu->children])
    </ul>
</li>
@else
<li><a href="{{route('menucontent', ['id'=> $submenu->id, 'slug'=>$submenu->title])}}">{{$submenu->title}}</a></li>
@endif

@endforeach