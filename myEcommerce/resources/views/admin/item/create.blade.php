@extends ('admin.layouts.app')

@section('content')
<div class="container">
    <form class="" action="{{route ('item.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="number" class="form-control" name="stock">
        </div>


        <div class="form-group">
             <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>
@endsection