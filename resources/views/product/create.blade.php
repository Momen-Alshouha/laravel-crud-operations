@extends('product.layout')

@section('content')

    <div class="container">
        <h1 class="display-5" style="background-color: #eee; padding:10px;">Create Product</h1><br>
        <form action="{{ route('products.store')}}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="">Product name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Product Price</label>
                <input type="text" name="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Details</label>
                <textarea class="form-control" name="detail" id="" cols="10" rows="10"></textarea>
            </div>

            <div class="row">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">CREATE PRODUCT</button>
                </div>
                <div class="col-sm-3">
                    <a type="submit" href ="{{route('products.index')}}" class="btn btn-info">BACK TO PRODUCTS</a>
                 </div>
            </div>
        </form>
    </div>
@endsection