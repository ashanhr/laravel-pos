@extends('.layouts.app')

@section('content')

    <div class="container">
        <br>

        <div class="shadow-lg p-4 mb-4 bg-white">
            <div class="container row">

                <div class="col-md-10"><h1>Books</h1></div>
                <div class="col-md-2">
                    <a class="btn btn-primary" name="create" href="{{route('book.create')}}" >Create Book</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="shadow-lg p-4 mb-4 bg-white">

            <div class="container">

                @if(count($books)>0)
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">ISBN No:</th>
                            <th scope="col">Price</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Available Amount</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($books as $book)
                            <tr>
                                <th scope="row">{{$book->id}}</th>
                                <td>{{$book->name}}</td>
                                <td>{{$book->isbn}}</td>
                                <td>{{$book->price}}</td>
                                <td>{{$book->quantity}}</td>
                                @if(isset($book->remain_amount))
                                    <td>{{$book->remain_amount}}</td>
                                @else
                                    <td>{{$book->quantity}}</td>
                                @endif
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                @else

                    <div class="alert alert-danger">
                        <strong>No books available</strong>
                    </div>

                @endif

            </div>
        </div>
    </div>



@endsection