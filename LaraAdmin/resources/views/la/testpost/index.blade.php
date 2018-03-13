<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Testmodule</h4>
            </div>
            {!! Form::open(['action' => 'LA\TestpostController@postdata', 'id' => 'testmodule-add-form']) !!}
            <div class="modal-body">
                <div class="box-body">
                    @la_form($module)

                    {{--
                    @la_input($module, 'name')
                    @la_input($module, 'address')
                    @la_input($module, 'submit')
                    --}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>