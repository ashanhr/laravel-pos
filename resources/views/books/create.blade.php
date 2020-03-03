@extends('layouts.app')

@section('content')

    <div class="container">
        <br>

        <div class="shadow-lg p-4 mb-4 bg-white">
            <div class="container">
                <h1>Add Books</h1>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="shadow-lg p-4 mb-4 bg-white">


            <form method="POST" action="/books">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Book Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Book Name" name="name" value="{{old('name')}}">

                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">ISBN No</label>
                    <input type="text" class="form-control" id="isbn" placeholder="ISBN No" name="isbn" value="{{old('isbn')}}">
                    @error('isbn')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Price" name="price" value="{{old('price')}}">
                    @error('price')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Quantity</label>
                    <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity" value="{{old('quantity')}}">
                    @error('quantity')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                {{--        <div class="form-group">--}}
                {{--            <label for="exampleFormControlTextarea1">Example textarea</label>--}}
                {{--            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>--}}
                {{--        </div>--}}

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
    </div>


@endsection