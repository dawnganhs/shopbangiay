@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Creating User</h1>
    <form action="/listusers" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-6 form-group">
            <label for="">Name</label>
            <input class="form-control" autofocus="" type="text" name="name">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Address</label>
            <input class="form-control" autofocus="" type="text" name="address">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Email</label>
            <input class="form-control" autofocus="" type="text" name="email">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Password</label>
            <input class="form-control" autofocus="" type="password" name="password">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Phone</label>
            <input class="form-control" autofocus="" type="number" name="phone">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Role</label>
            <select class="form-control" name="role">
                <option value="admin">Admin</option>
                <option value="customer">Customer</option>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <input class="btn btn-primary" type="submit" name="create" value="CREATE">
        </div>
    </form>
</div>
@endsection