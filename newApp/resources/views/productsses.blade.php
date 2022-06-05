<table>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Phone No</th>
    </tr>
@foreach($product as $data)
<tr>
   <td>{{$data['id']}}</td>
   <td>{{$data['name']}}</td>
   <td>{{$data['phone']}}</td>
</tr>
@endforeach
</table>