<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          @for($i = 0; $i < sizeof($links)-1; $i++)
          <li class="breacrumb-item">
            <a href="{{$links[$i]['valor']}}">{{$links[sizeof($links)-1]['nome']}}</a>
        </li>
        @endfor
        <li class="breacrumb-item active">{{$links[sizeof($links)-1]['nome']}}</li>
        </ol>
    </nav>