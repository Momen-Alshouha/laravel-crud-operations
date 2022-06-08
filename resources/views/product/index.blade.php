@extends('product.layout')

@section('content')

    <div class="jumbotron">
        <h1 class="display-4">  Hello, world! <?php echo 10+10?></h1>
        <hr class="my-4">
        <h2 class="display-5">Laravel CRUD</h2><br>
        <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">CREATE PRODUCT</a>
    </div>

    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>            
        @endif

    </div>

    <div class="container fluid">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col" >Actions</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $i=1;
                @endphp
             @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}} JD</td>
                    <td>
                        <div class="row">
                            <div class="col-sm">
                                <a class="btn btn-success" href="{{route('products.edit', $product->id)}}">EDIT</a>
                            </div>
                            <div class="col-sm">
                                <a class="btn btn-primary" href="{{route('products.show', $product->id)}}">SHOW</a>
                            </div>
                            <div class="col-sm">
                                <form method="POST" action="{{route('products.destroy', $product->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                </form>
                            </div>
                          </div>                   
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
          
    </div>
@endsection