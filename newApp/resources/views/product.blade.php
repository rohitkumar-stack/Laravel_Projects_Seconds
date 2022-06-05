<table>
    <tr>
        <th> Heading</th>
        <th> Content</th>
        <th>Price</th>
    </tr>
    @foreach($product as $data)
        <tr>
            <td>{{$data['name']}}</td>
            
        </tr> 
    @endforeach
</table>    