@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="float-right">
                <a href="{{ route('stores_create') }}" class="btn btn-primary">Add Store</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card">
                <div class="card-header">Stores</div>
                <div class="card-body">
                   



                    <form method="POST" action="">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Store Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="store" aria-describedby="StoreName" placeholder="Enter Store">
                          
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Enter Address">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                      </form>



                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
