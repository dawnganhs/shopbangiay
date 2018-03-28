@extends('layouts.app') 
@section('content')
<div class="container">
    <a href="/listusers/create">Create new User</a>
    <table class="table table-responsive">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>ADDRESS</td>
            <td>PASSWORD</td>
            <td>PHONE</td>
            <td>EMAIL</td>
            <td>ROLE</td>
            <td>CREATED AT</td>
            <td>UPDATED AT</td>
            <td>EDIT/DELETE</td>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>
                <form action="listusers/{{$user->id}}/edit">
                    <input class="form-control" type="submit" value="EDIT">
                </form>
                <form class="form" action="listusers/{{$user->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" type="hidden" name="_method" value="DELETE">
                    <input class="form-control" type="submit" name="delete" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>


@endsection