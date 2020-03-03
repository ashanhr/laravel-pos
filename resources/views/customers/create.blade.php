@extends('layouts.app')

@section('content')

    <div class="container">
        <br>

        <div class="shadow-lg p-4 mb-4 bg-white">
            <div class="container">
                <h1>Add Customers</h1>
            </div>
        </div>
    </div>


    <div class="container">

        <div class="shadow-lg p-4 mb-4 bg-white">

            <form method="POST" action="/customers">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Name" name="name" value="{{old('name')}}">

                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Your Email" name="email" value="{{old('email')}}">
                    @error('email')
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