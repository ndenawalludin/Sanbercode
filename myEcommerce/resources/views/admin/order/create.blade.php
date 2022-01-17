@extends ('admin.layouts.app')

@section('content')
<div class="container">
    <form class="" action="{{route ('order.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">User ID</label>
            <input type="text" class="form-control" name="user_id" placeholder="Enter your Name">
        </div>
        <div class="form-group">
            <label for="">Total</label>
            <input type="text" class="form-control" name="total" placeholder="Enter yout Address">
        </div>
        <div class="form-group">
             <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>
</div>
@endsection