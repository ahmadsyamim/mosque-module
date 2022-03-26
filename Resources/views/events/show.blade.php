@extends('voyager-frontend::layouts.default')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/events.singular')
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('events.show_fields')
                    <a href="{!! route('events.index') !!}" class="btn btn-default">
                        @lang('crud.back')
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
