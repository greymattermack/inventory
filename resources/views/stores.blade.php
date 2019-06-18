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
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Store Name</th>
                            <th scope="col">Address</th>
                           
                          </tr>
                        </thead>
                        <tbody>

                         

                          @foreach($stores as $store)
                          <tr>
                          <th scope="row">{{ $store->id }}</th>
                          <td>{{$store->name}}</td>
                          <td>{{$store->address}}</td>


                            </tr>

                          @endforeach

                      


                          
                        </tbody>
                      </table>



                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
