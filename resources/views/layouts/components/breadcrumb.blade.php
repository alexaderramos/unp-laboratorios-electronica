@if(($labels ?? '') !== '')
    @foreach($labels as $label )
        <li class="breadcrumb-item"><a href="{{route($label[1])}}">{{$label[0]}}</a></li>
    @endforeach
@endif
<li class="breadcrumb-item active">{{$currentPage}}</li>

