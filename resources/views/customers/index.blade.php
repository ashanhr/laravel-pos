@extends('.layouts.app')

@section('content')

    <div class="container">
        <br>

        <div class="shadow-lg p-4 mb-4 bg-white">
            <div class="container row">

                <div class="col-md-10"><h1>Customers</h1></div>
                <div class="col-md-2">
                    <a class="btn btn-primary" name="create" href="{{route('customer.create')}}" >Create Customer</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="shadow-lg p-4 mb-4 bg-white">

            <div class="container">

                @if(count($customers)>0)
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Registered At</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($customers as $customer)
                            <tr>
                                <th scope="row">{{$customer->id}}</th>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->created_at}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                @else

                    <div class="alert alert-danger">
                        <strong>No customers available</strong>
                    </div>
                @endif

            </div>
        </div>
    </div>



@endsection