@extends('include')

@section('container')
<div class="container">
    <div class="col-md-6 offset-md-3">
    <h2 class="text-center mt-4">List of Post</h2>
    <table class="table table-hover">
       <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone No</th>
                <th scope="col">State</th>
            </tr>
        </thead>  
            <tbody>
            @foreach($post as $posts)
                <tr>
                <th scope="row">{{$posts['id']}}</th>
                <td>{{$posts['name']}}</td>
                <td>{{$posts['phone']}}</td>
                <td>{{$posts['state']}}</td>
                <td>
                <a href="delete_curd/{{$posts['id']}}"><i class="fa fa-trash" style="color:red"></i></a>
                    &nbsp; &nbsp;
                 <a href="edit_curd/{{$posts['id']}}"><i class="fa fa-edit" style="color:#000; font-weight:bold;"></i></a>

                 </td>
               </tr>
            @endforeach
           </tbody>
   </table>

    </div>
</div>

@endsection