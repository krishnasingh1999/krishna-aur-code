@php
    $title="Add Center";
@endphp

@include('header')

            @include('side-bar')
   
            <section class="home">
              <div class="container">
                <div class="row my-5">
                    <div class="col-3">
                        <a href="center">
                        <button class="btn btn-primary shadow">+ All Centers</button>
                    </a>
                    </div>
                </div>
            </div>
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12 ">
                           
                            <form action="{{url('/')}}/add-center" class="bg-light p-4 shadow" method="POST">
                              <h2 class="mb-4 text-center text-primary text-decoration-underline">Center Registration</h2>
                              @csrf
                                <div class="mb-3">
                                    <label for="centerOwner" class="form-label">Center Owner</label>
                                    <input type="text" class="form-control" name="centerOwner" id="CenterOwner" placeholder="Enter Full Name">
                                   
                                  </div>

                                  <div class="mb-3">
                                    <label for="centerMobile" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" name="centerMobile" id="CenterMobile"  placeholder="Mobile Number">
                                   
                                  </div>

                                <div class="mb-3">
                                  <label for="centerEmail" class="form-label">Email address</label>
                                  <input type="email" class="form-control" name="centerEmail" id="CenterEmail" placeholder="E-mail">
                                 
                                </div>

                                <div class="mb-3">
                                    <label for="centerAddress" class="form-label">Center Location</label><br>
                                    <textarea name="centerAddress" class="form-control" id="centerAddress" cols="76" rows="2"></textarea>
                                   
                                  </div>

                                  <div class="row mb-3">
                                    <div class="col">
                                        <label for="centerPin" class="form-label">State</label>
                                        <select class="form-select" name="centerState">
                                            <option selected disabled>Select State</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                    </div>
                                    <div class="col">
                                        <label for="centerPin" class="form-label">City</label>
                                        <select class="form-select" name="centerCity">
                                            <option selected disabled>City</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                          </select>
                                    </div>
                                    <div class="col">
                                        <label for="centerPin" class="form-label">Pin Code</label>
                                        <input type="number" class="form-control" name="centerPin" id="CenterPin" placeholder="Pin Code">
                                       
                                    </div>
                                  </div>
                                  
                                  <div class="row border border-primary rounded py-2 mb-5">
                                    <label class="fw-bold mb-2">Bank Details</label>
                                    
                                    <div class="col-6 mb-4">
                                        <label for="centerAccname" class="form-label">Account Holder Name</label>
                                        <input type="text" class="form-control" name="centerAccname" id="centerAccname" placeholder="Enter Full Name">
                                       
                                      </div>
                                      <div class="col-6 mb-4">
                                        <label for="centerBankname" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" name="centerBankname" id="centerBankname" placeholder="Enter Bank Name">
                                       
                                      </div>
                                      
                                      

                                      <div class="col-6">
                                        <label for="centerAccnumber" class="form-label">Account Number</label>
                                        <input type="number" class="form-control" name="centerAccnumber" id="centerAccnumber" placeholder="Account Number">
                                       
                                      </div>
                                     
                                      <div class="col-6">
                                        <label for="centerAccifsc" class="form-label">IFSC Code</label>
                                        <input type="text" class="form-control" name="centerAccifsc" id="centerAccifsc" placeholder="IFSC Code">
                                       
                                      </div>
                                  </div>

                                  <div class="mb-3">
                                    <label for="createPassword" class="form-label">Create New Password</label>
                                    <input type="password" class="form-control" name="createpassword" id="ceatePassword" placeholder="Create New Password">
                                   
                                  </div>

                                  <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmpassword" id="confirmPassword" placeholder="Confirm Password">
                                   
                                  </div>
                                  
                                <button type="submit" class="btn btn-primary mb-4">Submit</button>
                            </form>    
                        </div>
                    </div>
                </div>
            </section>

      

                
@include('footer')