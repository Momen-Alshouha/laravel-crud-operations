@extends('product.layout')

@section('content')

    <div class="container">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->detail}}</td>
            </tbody>
          </table>
    </div>

    <div class="container">
        <a class="btn btn-info" href="{{route('products.index')}}">BACK TO PRODUCTS</a>
    </div>
@endsection