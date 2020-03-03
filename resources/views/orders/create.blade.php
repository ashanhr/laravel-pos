{{--@extends('layouts.app')--}}

{{--@section('content')--}}

{{--    <div class="container">--}}
{{--        <br>--}}

{{--        <div class="shadow-lg p-4 mb-4 bg-white">--}}
{{--            <div class="container">--}}
{{--                <h1>Make a sale</h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="container">--}}

{{--        <div class="shadow-lg p-4 mb-4 bg-white">--}}

{{--            @if(count($customers)>0)--}}

{{--            <form method="POST" action="/sales">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label for="customers">Customer Name</label>--}}

{{--                    <select  class="form-control" name="customers[]">--}}
{{--                        @foreach($customers as $customer)--}}
{{--                            <option value="{{$customer->id}}">{{$customer->name}}</option>--}}
{{--                        @endforeach--}}

{{--                    </select>--}}

{{--                    @error('customers')--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{$message}}--}}
{{--                    </div>--}}
{{--                    @enderror--}}

{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label for="books">Books</label>--}}

{{--                    <select multiple  class="form-control" name="books[]">--}}
{{--                        @foreach($books as $book)--}}
{{--                            <option value="{{$book->id}}">{{$book->name}}</option>--}}
{{--                        @endforeach--}}

{{--                    </select>--}}

{{--                    @error('books')--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{$message}}--}}
{{--                    </div>--}}
{{--                    @enderror--}}

{{--                </div>--}}


{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlInput1">Amount</label>--}}
{{--                    <input type="text" class="form-control" id="amount" placeholder="Amount" name="email" value="{{old('email')}}">--}}
{{--                    @error('email')--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{$message}}--}}
{{--                    </div>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                --}}{{--        <div class="form-group">--}}
{{--                --}}{{--            <label for="exampleFormControlTextarea1">Example textarea</label>--}}
{{--                --}}{{--            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>--}}
{{--                --}}{{--        </div>--}}

{{--                <button type="submit" name="submit" class="btn btn-primary">Submit</button>--}}

{{--            </form>--}}

{{--             @else--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <strong>You have no data make a order</strong>--}}
{{--                </div>--}}
{{--             @endif--}}

{{--        </div>--}}
{{--    </div>--}}


{{--@endsection--}}


@extends('layouts.app')
@section('content')



    <div class="container">
        <br>

        <div class="shadow-lg p-4 mb-4 bg-white">
            <div class="container">
                <h1>Create an order</h1>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="shadow-lg p-4 mb-4 bg-white">


            <form method="POST" action="/orders">
                @csrf
                <div class="form-group">
                    <label for="customers">Customer Name</label>

                    <select  class="form-control" name="customers">
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach

                    </select>

                    @error('customers')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror

                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="books">Book</label>

                    </div>

                    <div class="form-group col-md-6">
                        <label for="amount">Amount</label>

                    </div>

{{--                    <div class="form-group col-md-2">--}}
{{--                        <label for="action">Action</label>--}}
{{--                    </div>--}}



                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <select  class="form-control" name="books">
                            @foreach($books as $book)
                                <option value="{{$book->id}}">{{$book->name}}</option>
                            @endforeach</select>@error('books')
                        <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="amount" placeholder="Amount" name="amount" value="{{old('amount')}}">

                        @error('amount')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

{{--                    <div class="form-group col-md-2">--}}
{{--                        <button class="btn btn-primary" type="button" name="add" class="btn btn-primary">Add</button>--}}
{{--                    </div>--}}



                </div>



                <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
    </div>

    <div class="table-responsive">
        <form method="post" id="dynamic_form">
            @csrf

            <span id="result"></span>









        </form>
    </div>

@endsection
