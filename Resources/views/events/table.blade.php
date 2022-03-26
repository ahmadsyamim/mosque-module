<div class="table-responsive">
    <table class="table" id="events-table">
        <thead>
            <tr>
                <th>@lang('models/events.fields.title')</th>
                <th>@lang('models/events.fields.description')</th>
                <th>@lang('models/events.fields.image')</th>
                <th>@lang('models/events.fields.date_from')</th>
                <th>@lang('models/events.fields.date_to')</th>
                <th>@lang('models/events.fields.user_id')</th>
                <th>@lang('models/events.fields.mosque_id')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
            <tr>
                <td><a href="{!! route('events.show', [$event->hashid()]) !!}">{!! $event->getTranslatedAttribute('title') !!}</a></td>
                <td>{!! $event->getTranslatedAttribute('description') !!}</td>
                <td>
                    @if ($event->image_url)
                    <img class="ui small image" src="{!! url($event->image_url) !!}">
                    @endif
                </td>
                <td>{!! $event->date_from !!}</td>
                <td>{!! $event->date_to !!}</td>
                <td>{!! $event->user_id !!}</td>
                <td>{!! $event->mosque->name !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
