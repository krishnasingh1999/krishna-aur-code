@php
    $title="Center List";
@endphp

@include('header')
            @include('side-bar')
            <section class="home">
            <div class="container">
                <div class="row my-5">
                    <div class="col-3">
                        <a href="add-center">
                        <button class="btn btn-primary shadow">+ New Center</button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped border bg-light text-center rounded shadow-lg">
                            <thead>
                              <tr>
                                <th scope="col">Id</th>
                                <th scope="col">City</th>
                                <th scope="col">Owner Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Demo city</td>
                                <td>Demo Owner</td>
                                <td>7007711567</td>
                                <td><a href="center-details"><button class="btn btn-primary">View Details</button></a></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Demo city 2</td>
                                <td>Demo Owner 2</td>
                                <td>70007711567</td>
                                <td><a href="center-details"><button class="btn btn-primary">View Details</button></a></td>
                              </tr>
                             
                            </tbody>
                          </table>
                    </div>
                </div>
               </div>
            </section>
   


        
@include('footer')