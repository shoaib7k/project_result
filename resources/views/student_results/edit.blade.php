@include('layouts.app')


{{ Form::open( array('method'=>'patch', 'route' => ['student_result.update']) ) }}
    {!! Form::label('id','ID')!!}
{{ Form::text('fieldname1',$stud_sho->id) }}
<br>
{!! Form::label('course_code','Course Code')!!}
{{ Form::text('fieldname2',$stud_sho->course_code) }}
<br>
{!! Form::label('tutorial','Tutorial(30%)')!!}
	{!! Form::number('tutorial',$stud_sho->tutorial,[
		'class'=>'form-control',
		'max'=>30,
		'min'=>0,
		]) !!}

<br>
{!! Form::label('exam','Exam Marks(70%)')!!}
	{!! Form::number('exam_marks',$stud_sho->exam_marks,[
		'class'=>'form-control',
		'max'=>70,
		'min'=>0,
		]) !!}
{{ Form::button('Save', ['type' => 'submit']) }}
{{ Form::close() }}