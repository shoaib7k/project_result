<html>
<head>
<title>Report</title>

</head>
<body>
<table>
<tr>
	<th>COurse Ocde</th>
	<th>Course Title</th>
  
</tr>

@foreach($products as $products)
<tr>
   <td>{{$products->id}}</td>
   <td>{{$products->course_id}}</td>
   


 </tr>

 @endforeach

</table></body>

</html>