<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/events.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/events.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/events.fields.image').':') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Date From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_from', __('models/events.fields.date_from').':') !!}
    {!! Form::date('date_from', null, ['class' => 'form-control','id'=>'date_from']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date_from').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Date To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_to', __('models/events.fields.date_to').':') !!}
    {!! Form::date('date_to', null, ['class' => 'form-control','id'=>'date_to']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date_to').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', __('models/events.fields.user_id').':') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mosque Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mosque_id', __('models/events.fields.mosque_id').':') !!}
    {!! Form::number('mosque_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('events.index') !!}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
