@include('layouts.app')




	@foreach($student_results as $student_result)
		<h1>{{$student_result->id}}</h1>
	@endforeach
