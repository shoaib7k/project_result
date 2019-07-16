@include('layouts.app')
<table class="table table-striped table-bordered" border="1">
	<tr>
		<th>Student ID</th>
		<th>Course Code</th>
		<th>Tutorial(30)</th>
		<th>Exam Marks(70)</th>
		<th>Total Number</th>
		<th>Grade</th>
		<th>Grade Point</th>
		<th>Edit</th>

	</tr>

	
		@foreach($stud_sho as $stud_sho)
		<tr>

			<td>{{$stud_sho->id}}</td>
			<td>{{$stud_sho->course_code}}</td>
			
			<td>{{$stud_sho->tutorial}}</td>
			<td>{{$stud_sho->exam_marks}}</td>
			<td>{{$stud_sho->number}}</td>
			<td>{{$stud_sho->grade}}</td>
			<td>{{$stud_sho->grade_point}}</td>

			<td><a href="{{route('student_result.edit',$stud_sho->id)}}">Edit</a> 
				{!!Form::open([
				'method'=>'delete',
				'route'=>['student_result.destroy',$stud_sho->serial]
				])!!}
			{!!Form::submit('Delete')!!}
			{!!Form::close()!!}

		</tr>
		
	    @endforeach
	

	

</table>
