@extends ('admin.layouts.app')

@section('content')
<div class="container">
    @foreach ($items as $item)
        <div class="panel panel-default">
            <div class="panel-heading">{{$item -> name}}</div>

            <div class="panel-body">
                <p>{{$item -> description}}</p>
                <p>{{$item -> price}}</p> 
                <p>{{$item -> stock}}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection