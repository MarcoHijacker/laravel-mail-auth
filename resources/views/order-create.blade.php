@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Add New Order:</div>

                  <div class="card-body">

                      <form action="{{ route('order-store') }}" method="post">
                          @csrf
                          @method('POST')

                          <div class="form-group">
                              <label for="item">Item</label><br>
                              <input type="text" name="item" value="">
                          </div>
                          <div class="form-group">
                              <label for="price">Price</label><br>
                              <input type="number" name="price" value="">
                          </div>
                          <div class="form-group">
                              <label for="brand">Brand</label><br>
                              <input type="text" name="brand" value="">
                          </div>
                          <div class="form-group">
                              <label for="category">Category</label><br>
                              <input type="text" name="category" value="">
                          </div>
                          <div class="form-group">
                              <label for="fastdelivery">Fast Delivery (1 Yes 0 No)</label><br>
                              <input type="number" name="fastdelivery" value="">
                          </div><br>

                          <button type="submit" name="button">CREATE</button>

                      </form>
                  </div>

              </div>
          </div>
      </div>
  </div>

@endsection
