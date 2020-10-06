@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders List:</div>

                <div class="card-body">
                  <a class="btn btn-primary" href="{{ route('order-create') }}"><i class="fas fa-plus-square"></i> Create New Order</a><br><br>

                  <ul>
                    @foreach ($ords as $ord)
                      <li>
                        <a href="{{ route('order-show', $ord -> id) }}">
                          <u>Order ID:<b> {{ $ord -> id }} </b></u><br>
                        </a>
                        <b>Item:</b> {{ $ord -> item }} <br>
                        <b>Brand:</b> {{ $ord -> brand }}
                      </li>
                    @endforeach

                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
