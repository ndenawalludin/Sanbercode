@extends ('admin.layouts.app')

@section('content')
<div class="container">
    @foreach ($categories as $category)
        <div class="panel panel-default">
            <div class="panel-heading">{{$category -> name}}</div>
        </div>
    @endforeach
</div>
@endsection