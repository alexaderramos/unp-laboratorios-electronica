<div class="col s10 m6 l6 breadcrumbs-left">
    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>{{ $currentPage }}</span></h5>
    <ol class="breadcrumbs mb-0">
        {{--$links ??  ''--}}
        @if(($labels ?? '') !== '')
            @foreach($labels as $label )
                <li class="breadcrumb-item"><a href="{{route($label[1])}}">{{$label[0]}}</a></li>
            @endforeach
        @endif
        <li class="breadcrumb-item active">{{$currentPage}}</li>
    </ol>

</div>
