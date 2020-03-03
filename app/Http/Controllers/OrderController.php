<?php

namespace App\Http\Controllers;

use App\Book;
use App\Customer;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create',[
            'customers' => Customer::all(),
            'books' => Book::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('this works');
        $order = new Order();

        $order->customer_id = $request->customers;
        $order->amount = $request->amount;

        $order->save();

        $order ->books() ->attach($request->books);

        $book = Book::where('id',$request->books)->firstOrFail();
        if (isset($book->remain_amount))
            $book -> remain_amount = $book ->remain_amount-$order->amount;
        else
            $book -> remain_amount = $book ->quantity-$order->amount;

        $book ->save();


        return redirect('/books');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Order $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $sale)
    {
        //
    }
}
