@extends ('admin.layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Edit Category</div>

        <div class="panel-body">
            <form class="" action="{{route ('category.update', $category)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
        </div>
    </div>
@endsection