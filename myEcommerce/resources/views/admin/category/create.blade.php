@extends ('admin.layouts.app')

@section('content')
<div class="container">
    <form class="" action="{{route ('category.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
    
        <div class="form-group">
             <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>
@endsection