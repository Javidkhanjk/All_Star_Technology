@extends('layouts.auth')
 @section('content')

 <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Customer Engagement Table</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item active" aria-current="page">ALL</li>
          </ol>
        </nav>
      </div>

        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Customer Engagement Table</h4>

              @if (count($customers)>0)
              <table class="table table-striped">
                <thead>
                  <tr>

                    <th>Customer Name</th>
                    <th>Customer Phone No </th>
                    <th>Service Categories </th>
                    <th>Customer Email</th>
                    <th>Cutomer City</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)



                    <tr>

                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->customer_phone}}</td>
                        <td> {{$customer->category->category_name}} </td>
                        <td>{{$customer->customer_email}}</td>
                        <td>{{$customer->customer_city}}</td>
                        <td><a href="#" class="btn btn-sm btn-success">View</a></td>
                        <td><a href="#" class="btn btn-sm btn-info">Edit</a></td>
                        <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td>
                      </tr>
                      @endforeach
                </tbody>
              </table>
              @else
                       <h1>no data</h1>
              @endif

            </div>
          </div>
        </div>



      </div>
    </div>
    <!-- content-wrapper ends -->



 @endsection
