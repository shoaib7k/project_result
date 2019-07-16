<html>
<head>
<title>Report</title></head>
<body><table><thead>
<tr>
   <th>ID</th>
   <th>Name</th>
   <th>ddn</th>
   <th>nd</th>
</tr>
</thead>
<tbody>
@foreach($products as $products)
<tr>
   <td>{{$products->id}}</td>
   


 </tr>

 @endforeach
</tbody>
</table></body>

</html>