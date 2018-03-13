@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/testtables') }}">Testtable</a> :
@endsection
@section("contentheader_description", $testtable->$view_col)
@section("section", "Testtables")
@section("section_url", url(config('laraadmin.adminRoute') . '/testtables'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Testtables Edit : ".$testtable->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($testtable, ['route' => [config('laraadmin.adminRoute') . '.testtables.update', $testtable->id ], 'method'=>'PUT', 'id' => 'testtable-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'address')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/testtables') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#testtable-edit-form").validate({
		
	});
});
</script>
@endpush
