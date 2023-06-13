@extends('layouts.auth')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Customer Information View</h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Customer Information Form </h4>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>

                                    @endforeach
                                </ul>
                            </div>

                            @endif
                            <form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data" class="forms-sample">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Customer Name</label>
                                    <input type="text" class="form-control" name="name" value="{{old('name')}}" id="exampleInputName1" placeholder="Customer Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Customer Phone No</label>
                                    <input type="text" class="form-control" name="phone" value="{{old('phone')}}" id="exampleInputName1" placeholder="Customer Phone Nomber" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Customer Email</label>
                                    <input type="text" class="form-control" name="email" value="{{old('email')}}" id="exampleInputName1" placeholder="Customer Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Customer City</label>
                                    <input type="text" class="form-control" name="city" value="{{old('city')}}" id="exampleInputName1" placeholder="Customer City" required>
                                </div>
                                <div class="form-group">
                                    <label ">Category</label>
                                    <select class="form-control" name="category" value="{{old('category')}}" id="exampleSelectGender">
                                        <option disabled selected>Choose Option</option>
                                        @if (count($categories)> 0){
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>

                                            @endforeach
                                            }
                                            @endif
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
