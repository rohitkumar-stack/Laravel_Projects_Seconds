@extends('include')

@section('container')   
    <h1>Form Page</h1>
    <div class="container">
        <div class="col-6">
        <form action="/update_curd" method="POST">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="{{$data['name']}}" placeholder="Name">
            </div>

            <div class="form-group">
                <label>Phone No:</label>
                <input type="text" class="form-control" name="phone" value="{{$data['phone']}}" placeholder="Phone">
            </div>

            <div class="form-group">
                <label>state:</label>
                <input type="text" class="form-control" name="state" value="{{$data['state']}}" placeholder="State">
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        </div>
    </div>

    @endsection

    