@include('layouts.app')

{{-- <a href="{{ route('pdfview',['download'=>'pdf']) }}">pdf view</a> --}}
<table class="table table-striped table-bordered" border="1">
	<tr>
		<th>Student ID</th>
		<th>Course Code</th>
		<th>Tutorial(30)</th>
		<th>Exam Marks1(35)</th>
		<th>Exam Marks2(35)</th>
		<th>Total Number</th>
		<th>Grade</th>
		<th>Grade Point</th>
		<th>Point Secured</th>

	</tr>

	
		@foreach($stud_sho as $stud_sho)
		<tr>

			<td>{{$stud_sho->id}}</td>
			<td>{{$stud_sho->course_code}}</td>
			
			<td>{{$stud_sho->tutorial}}</td>
			<td>{{$stud_sho->exam_marks1}}</td>
			<td>{{$stud_sho->exam_marks2}}</td>
			<td>{{$stud_sho->totalmarks}}</td>
			<td>{{$stud_sho->grade}}</td>
			<td>{{$stud_sho->grade_point}}</td>
			<td>{{$stud_sho->point_secured}}</td>
		

			<td><a href="{{route('student_result.edit',$stud_sho->id)}}">Edit</a> 
				{!!Form::open([
				'method'=>'delete',
				'route'=>['mark_entry.destroy',$stud_sho->serial]
				])!!}
			{!!Form::submit('Delete')!!}
			{!!Form::close()!!}

		</tr>
		
	    @endforeach
	

	

</table>