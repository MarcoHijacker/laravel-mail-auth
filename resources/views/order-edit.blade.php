@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Order {{ $ord -> id }}</div>

                  <div class="card-body">

                      <form action="{{ route('order-update', $ord -> id) }}" method="post">
                          @csrf
                          @method('POST')

                          <div class="form-group">
                              <label for="item">Item</label><br>
                              <input type="text" name="item" value="{{ $ord -> item }}">
                          </div>
                          <div class="form-group">
                              <label for="price">Price</label><br>
                              <input type="number" name="price" value="{{ $ord -> price }}">
                          </div>
                          <div class="form-group">
                              <label for="brand">Brand</label><br>
                              <input type="text" name="brand" value="{{ $ord -> brand }}">
                          </div>
                          <div class="form-group">
                              <label for="category">Category</label><br>
                              <input type="text" name="category" value="{{ $ord -> category }}">
                          </div>
                          <div class="form-group">
                              <label for="fastdelivery">Fast Delivery (1 Yes 0 No)</label><br>
                              <input type="number" name="fastdelivery" value="{{ $ord -> fastdelivery }}">
                          </div><br>

                          <button type="submit" name="button">SAVE</button>

                      </form>
                  </div>

              </div>
          </div>
      </div>
  </div>

@endsection
