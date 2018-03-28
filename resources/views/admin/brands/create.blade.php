@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Creating Brand</h1>
    <form class="form" action="/listbrands" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-6 form-group">
            <label for="">Name</label>
            <input class="form-control" autofocus="" type="text" name="name">
        </div><br>
            <input class="btn btn-primary" type="submit" name="create" value="CREATE">
    </form>
</div>
@endsection