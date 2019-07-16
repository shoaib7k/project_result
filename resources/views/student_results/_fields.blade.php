{!! Form::label('id','ID')!!}
{{ Form::text('fieldname1') }}
<br>
{!! Form::label('course_code','Course Code')!!}
{{ Form::text('fieldname2') }}
<br>
{!! Form::label('tutorial','Tutorial(30%)')!!}
	{!! Form::number('tutorial','',[
		'class'=>'form-control',
		'max'=>30,
		'min'=>0,
		]) !!}

<br>
{!! Form::label('exam','Exam Marks(70%)')!!}
	{!! Form::number('exam_marks','',[
		'class'=>'form-control',
		'max'=>70,
		'min'=>0,
		]) !!}
{{ Form::button('Save', ['type' => 'submit']) }}