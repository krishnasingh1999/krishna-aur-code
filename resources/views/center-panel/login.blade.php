
@php
    $title="Center Login";
@endphp

@include('header')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 col-md-4 m-auto">
           <div class="card mt-5 p-4 rounded shadow-lg">
              <div class="card-title">
                 <h4 class="text-center">Center Login</h4>
              </div>
            <form>
                <div class="mb-3">
                  <label for="centerUserId" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="centerUserId" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="centerPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="centerPassword">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>

                <div class="text-center"><button type="submit" class="btn btn-primary mx-auto">Login</button></div>
            </form>
           </div>
        </div>
    </div>
</div>
@include('footer')