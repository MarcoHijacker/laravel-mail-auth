@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Order: {{ $ord -> id }}</div>

                  <div class="card-body">
                    <ul>
                      <b>Item:</b> {{ $ord -> item }} <br>
                      <b>Price:</b> {{ $ord -> price }} <br>
                      <b>Brand:</b> {{ $ord -> brand }} <br>
                      <b>Category:</b> {{ $ord -> category }} <br>
                      <b>Fast Delivery:</b>
                      @if($ord -> fastdelivery == 1)
                        Yes
                      @else
                        No
                      @endif
                    </ul>
                    @auth
                      <br>
                      <a class="btn btn-primary" href="{{ route('order-edit', $ord -> id) }}"><i class="fas fa-edit"></i> Edit</a>
                      <a class="btn btn-danger" href="{{ route('order-destroy', $ord -> id) }}"><i class="fas fa-trash-alt"></i> Delete</a>
                    @else
                      <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    @endauth
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
