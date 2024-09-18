@php
    $title="Add Center";
@endphp

@include('header')

            @include('center-panel/centerSideBar')
            <section class="home">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                           
                            
                            <form class="bg-light p-4 my-4">
                              <h3 class="mb-4">Student Registration</h3>
                                <div class="col-3 mb-3">
                                    <label for="center" class="form-label">WCCD Center</label>
                                    <select class="form-select" name="courseName">
                                        <option selected disabled>Select Center</option>
                                        <option value=""></option> 
                                      </select>
                                </div>
                                <div class="mb-3">
                                    <label for="stName" class="form-label">Student Name</label>
                                    <input type="text" class="form-control" name="stName" id="stName" placeholder="Enter Full Name">
                                   
                                  </div>

                                  <div class="mb-3">
                                    <label for="stNumber" class="form-label">Mobile Number</label>
                                    <input type="tel" maxlength="10" minlength="10" class="form-control" name="stNumber" id="stNumber" placeholder="Mobile Number">
                                   
                                  </div>
                                  <div class="mb-3">
                                    <label for="stEmail" class="form-label">E-mail Id</label>
                                    <input type="email"  class="form-control" name="stEmail" id="stEmail" placeholder="Email-id">
                                   
                                  </div>
                                 <div class="row">
                                  <div class="col mb-3">
                                  <label for="courseCategory" class="form-label">Course Category</label>
                                  <select class="form-select" name="courseCategory">
                                      <option selected disabled>Select Category</option>
                                      <option value="Fashion Design">Fashion Design</option>
                                      <option value="Interior Design">Interior Design</option>
                                      <option value="Graphic Design & Animation">Graphic Design & Animation</option>
                                      <option value="Web Design & Development">Web Design & Development</option>
                                      <option value="Data Science">Data Science</option>
                                      <option value="Digital Marketing">Digital Marketing</option>
                                    </select>
                                  </div>

                                  <div class="col mb-3">
                                    <label for="courseType" class="form-label">Course Type</label>
                                    <select class="form-select" name="courseType">
                                        <option selected disabled>Select Course Type</option>
                                        <option value="B. Voc.">B. Voc.</option>
                                        <option value="B. Des.">B. Des.</option>
                                        <option value="Advance Diploma">Advance Diploma</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="certificate">Certificate</option>
                                       
                                      </select>
                                    </div>
                                 </div>

                                    <div class="mb-3">
                                        <label for="courseName" class="form-label">Course Name</label>
                                        <select class="form-select" name="courseName">
                                            <option selected disabled>Select Course Name</option>
                                            <option value=""></option> 
                                          </select>
                                    </div>
                                    <div class="mb-3">
                                      <label for="totalFee" class="form-label">Total Course Fee</label>
                                      <input type="number" class="form-control" name="totalFee" id="totalFee" placeholder="Total Course Fee">
                                     
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label for="discount" class="form-label">Discount Percentage</label>
                                      <input type="number" class="form-control" name="discount" id="discount" placeholder="Discount Percentage">
                                     
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label for="feeAfterDis" class="form-label">Total Course Fee After Discount</label>
                                      <input type="number" class="form-control" name="feeAfterDis" id="feeAfterDis" placeholder="Fee After Discount">
                                     
                                    </div>
                                    
                                    <div class="mb-3">
                                      <label for="totalEmiNo" class="form-label">Total Number Of EMI</label>
                                      <input type="number" class="form-control" name="totalEmiNo" id="totalEmiNo" placeholder="Total Number Of EMI">
                                     
                                    </div>
                                    <div class="mb-3">
                                      <label for="emiAmmount" class="form-label">EMI Ammount</label>
                                      <input type="number" class="form-control" name="emiAmmount" id="emiAmmount" placeholder="EMI Ammount">
                                     
                                    </div>


                                <button type="submit" class="btn btn-primary mb-4">Submit</button>
                            </form>    
                        </div>
                    </div>
                </div>
            </section>

            @include('footer')