@include('layouts.app')


{{ Form::open( array( 'route' => ['course.store'], 'role' => 'form' ) ) }}
 
{!! Form::label('course_code','Course Code')!!}
{{ Form::text('fieldname1') }}
<br>
 
{!! Form::label('course_name','Course Name')!!}
{{ Form::text('fieldname2') }}
<br>

	{!! Form::label('course_semester','Course Semester')!!}
	{!! Form::number('course_semester','',[
		
		'max'=>8,
		'min'=>1,
		]) !!}
		<br>
{{ Form::button('Submit', ['type' => 'submit']) }}
{{ Form::close() }}

