<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/mosques.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/mosques.fields.image').':') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/mosques.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', __('models/mosques.fields.address').':') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', __('models/mosques.fields.website').':') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Prefectures Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prefectures', __('models/mosques.fields.prefectures').':') !!}
    {!! Form::text('prefectures', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', __('models/mosques.fields.city').':') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/mosques.fields.status').':') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mosques.index') !!}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
