@extends ('admin.layouts.app')

@section('content')
<div class="container">
    @foreach ($orders as $order)
        <div class="panel panel-default">
            <div class="panel-heading">{{$order -> user_id}}</div>

            <div class="panel-body">
                <p>{{$order -> total}}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection