@include('layouts.app')


	   <div class="form-group">
    {!! Form::label('country_course_code','Select a Subject') !!}
    {!! Form::select('country_course_code', $countries, null, ['class' => 'form-control']) !!}
</div>
	

	

</table>
