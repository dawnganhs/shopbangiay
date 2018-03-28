@extends('layouts.app') 
@section('content')
<div class="container">
    <a href="/listproducts/create">Create new Products</a>
    <table class="table table-responsive">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>IMAGE</td>
            <td>PRICE</td>
            <td>COLOR</td>
            <td>SIZE</td>
            <td>GENDER</td>
            <td>DESCRIPTION</td>
            <td>BRAND</td>
            <td>CREATED AT</td>
            <td>UPDATED AT</td>
            <td>EDIT/DELETE</td>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td><img src="../images/{{$product->image}}" width="200"></td>
            {{--  <td>{{$product->image}}</td>  --}}
            <td>{{$product->price}}</td>
            <td>{{$product->color}}</td>
            <td>{{$product->size}}</td>
            <td>{{$product->gender}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->id_brand}}</td>
            
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <form action="listproducts/{{$product->id}}/edit">
                    <input class="form-control" type="submit" value="EDIT">
                </form>
                <form class="form" action="listproducts/{{$product->id}}" method="POST">
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