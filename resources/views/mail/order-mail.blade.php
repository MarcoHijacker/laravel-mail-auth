{{-- Template Email fir Deletion --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Laravel Mailing<br>
                  Deletion of Order #{{ $ord -> id }}
                </div>

                <div class="card-body">
                  <u>Details:</u>
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
                </div>
            </div>
        </div>
    </div>
</div>
