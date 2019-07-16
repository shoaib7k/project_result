@include('layouts.app')


<div align="center">
	{!! Form::open(['route'=>'student_reg.store'])!!}


	{!! Form::label('id','ID')!!}
	{!! Form::text('id',null,['class' => 'form-control']) !!}
	<br>
	{!! Form::label('name','Name')!!}
	{!! Form::text('name',null,['class' => 'form-control']) !!}
	<br>

	{!! Form::label('session','Session')!!}
	{!! Form::text('session',null,['class' => 'form-control']) !!}
	<br>

	{!! Form::label('current_semester','Current Semester')!!}
	{!! Form::number('current_semester',8,[
		'class'=>'form-control',
		'max'=>8,
		'min'=>1,
		]) !!}
	<br>

	{!!Form::submit('Save')!!}
	{!!Form::close()!!}
</div>


