@include('layouts.app')

   @foreach($stud_reg as $student)
   		<h1>{{$student->name}}</h1>
   		<h2>{{$student->id}}</h2>
   	@endforeach
