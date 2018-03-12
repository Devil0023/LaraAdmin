@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/cards') }}">Card</a> :
@endsection
@section("contentheader_description", $card->$view_col)
@section("section", "Cards")
@section("section_url", url(config('laraadmin.adminRoute') . '/cards'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Cards Edit : ".$card->$view_col)

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
				{!! Form::model($card, ['route' => [config('laraadmin.adminRoute') . '.cards.update', $card->id ], 'method'=>'PUT', 'id' => 'card-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'img')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/cards') }}">Cancel</a></button>
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
	$("#card-edit-form").validate({
		
	});
});
</script>
@endpush
