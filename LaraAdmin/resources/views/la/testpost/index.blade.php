{!! Form::open(['action' => 'LA\TestpostController@postdatapost', 'id' => 'testmodule-add-form']) !!}

        {{--@la_form($module)--}}
        <input type="text" name="name" value="Tom">
        <input type="text" name="address" value="Shanghai">

        {{--
        @la_input($module, 'name')
        @la_input($module, 'address')
        @la_input($module, 'submit')
        --}}


{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}

{!! Form::close() !!}
