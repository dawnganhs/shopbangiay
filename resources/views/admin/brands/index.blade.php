@extends('layouts.app') 
@section('content')
<div class="container">
    <a href="/listbrands/create">Create new Brand</a>
    <table class="table table-responsive">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>CREATED AT</td>
            <td>UPDATED AT</td>
            <td>EDIT/DELETE</td>
        </tr>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td>
                <form action="listbrands/{{$brand->id}}/edit">
                    <input class="form-control" type="submit" value="EDIT">
                </form>
                <form class="form" action="listbrands/{{$brand->id}}" method="POST">
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