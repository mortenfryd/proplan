@extends('layouts.header') 
@section('content')
<header class="grid fxHeightL">
    <h3 class="grid-cell">
        All <span class="w400">Movies ({{$total_records}})</span>
    </h3>
    <div class="grid-cell smHeader"> 
        <span>Sort: 
            <a 
               @if ($sorted)
                class="active" href"/movies/{{$page}}"
               @elseif (!$sorted)
                href="/movies/{{$page}}/title"
               @endif
               >Alphabetical</a> / 
            <a 
               @if (!$sorted)
                class="active" href"/movies/{{$page}}"
               @elseif ($sorted)
                href="/movies/{{$page}}/premiere"
               @endif
               >Premiere</a>
        </span>
    </div>
    <nav class="grid-cell mBoxHeader">
        <ul>
            @for ($i = 1; $i <= $total_pages; $i++)
                @php
                     $arr[$i] = $i == $page ? "<li><a class=\"active\" href=\"/movies/$i/$sort\">$i</a></li>" : "<li><a href=\"/movies/$i/$sort\">$i</a></li>";
                     echo $arr[$i];
                @endphp
            @endfor
                @php
                     $arr[$total_pages+1] = "<li><a href=\"/movies/$next_page/$sort\"><i class=\"fa fa-chevron-right\"></i></a></li>";
                     echo $arr[$total_pages+1];                   
                @endphp
        </ul>
    </nav>
</header>
<div class="mBoxes black clear"> 
    @for ($i = 0; $i< count($movies); $i++)
        <div class="mBox">
            <a href="/movie/{{$movies[$i]['Slug']}}"> <img img src="http://nepharia.net/static/img/posters/{{$movies[$i]['Slug']}}/thumb.jpg" width="253" height="372" /> </a>
            <a href="/movie/{{$movies[$i]['Slug']}}">
            <h4>{{$movies[$i]['l']}}</h4> </a>
            <p>{{$movies[$i]['p']}}</p>
            <button>Order Tickets</button>
        </div> 
    @endfor
</div>
<nav class="mBoxHeader fxHeightL">
    <ul>
        <li><a href={{ "/movies/$prev_page/$sort" }}><i class="fa fa-chevron-left"></i></a></li>
        <?php for ($i = 1; $i <= count($arr); $i++) {echo $arr[$i];} ?>
    </ul>
</nav> 
@endsection