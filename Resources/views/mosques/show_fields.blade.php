<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/mosques.fields.name').':') !!}
    <p>{!! $mosque->name !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', __('models/mosques.fields.image').':') !!}
    <p>
        @if ($mosque->image_url)
        <img src="{!! url($mosque->image_url) !!}">
        @endif
    </p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/mosques.fields.description').':') !!}
    <p>{!! $mosque->description !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/mosques.fields.address').':') !!}
    <p>{!! $mosque->address !!}</p>
</div>

<!-- Website Field -->
<div class="form-group">
    {!! Form::label('website', __('models/mosques.fields.website').':') !!}
    <p>{!! $mosque->website !!}</p>
</div>

<!-- Prefectures Field -->
<div class="form-group">
    {!! Form::label('prefectures', __('models/mosques.fields.prefectures').':') !!}
    <p>{!! $mosque->prefectures !!}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', __('models/mosques.fields.city').':') !!}
    <p>{!! $mosque->city !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('country', __('models/mosques.fields.country').':') !!}
    <p>{!! $mosque->country->nicename !!}</p>
</div>

