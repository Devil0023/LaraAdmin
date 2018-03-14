{!! Form::open(['action' => 'LA\TestpostController@postdatapost', 'id' => 'testmodule-add-form']) !!}

        {{--@la_form($module)--}}

{!! Form::text('name', "Tom", ["class" => "self"]) !!}
{!! Form::text('address', "Shanghai", ["class" => "self"]) !!}
        {{--
        @la_input($module, 'name')
        @la_input($module, 'address')
        @la_input($module, 'submit')
        --}}

{{--<input type="text" name="name" value="Tom">--}}
{{--<input type="text" name="address" value="Shanghai">--}}

{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}

{!! Form::close() !!}
