
@foreach($timelines as $timeline)
{{ count($timeline->comment) }}
{{ count($timeline->favorite) }}
@endforeach