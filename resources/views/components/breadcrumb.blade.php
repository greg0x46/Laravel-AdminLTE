@if(!empty($crumbs))
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            @foreach($crumbs as $crumb => $path)
                @if($path !== null)
                    <li class="breadcrumb-item"><a href="{{url($path)}}">{{$crumb}}</a></li>
                @else
                    <li class="breadcrumb-item active">{{$crumb}}</li>
                @endif
            @endforeach
        </ol>
    </div>
@endif
