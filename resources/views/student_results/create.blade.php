@include('layouts.app')


{{ Form::open( array( 'route' => ['student_result.store'], 'role' => 'form' ) ) }}
    @include('student_results._fields')
{{ Form::close() }}