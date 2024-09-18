@php
    $title="Center Details";
@endphp

@include('header')
            @include('side-bar')
            <section class="home">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-3">
                            <a href="center">
                            <button class="btn btn-primary shadow">Back</button>
                        </a>
                        </div>
                    </div>
                </div>
               <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-light mb-5 p-4 ">
                            <table class="table">
                                <tr>
                                    <th>Center Id </th>
                                    <th>:</th>
                                    <td>Wccd - 01</td>
                                </tr>
                                <tr>
                                    <th>Owner Neme</th>
                                    <th>:</th>
                                    <td>Demo</td>
                                </tr>
                                <tr>
                                    <th>Contact Number </th>
                                    <th>:</th>
                                    <td>7007711567</td>
                                </tr>
                                <tr>
                                    <th>E-mail</th>
                                    <th>:</th>
                                    <td>demo@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>Full Address </th>
                                    <th>:</th>
                                    <td>Plot no 3 sector 4 vaishali ghaziabad Uttar Pradesh 201010</td>
                                </tr>
                                <tr>
                                    <th>State </th>
                                    <th>:</th>
                                    <td>Uttar Pradesh</td>
                                </tr>
                                <tr>
                                    <th>City </th>
                                    <th>:</th>
                                    <td>Ghaziabad</td>
                                </tr>
                                <tr>
                                    <th>Pin Code </th>
                                    <th>:</th>
                                    <td>201010</td>
                                </tr>
                                <tr class="bg-primary text-light">
                                    <th colspan="3">Bank Details </th>
                                    
                                </tr>
                                <tr>
                                    <th>Account Holder Name </th>
                                    <th>:</th>
                                    <td>Demo Owner</td>
                                </tr>
                                <tr>
                                    <th>Account Number </th>
                                    <th>:</th>
                                    <td>0000000000</td>
                                </tr>
                                <tr>
                                    <th>IFSC Code </th>
                                    <th>:</th>
                                    <td>SBIN00001</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
               </div>
            </section>

@include('footer')