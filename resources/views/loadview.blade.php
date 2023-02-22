<h3>Blade template</h3>
{{-- <h5>{{ 'Associated array ans is 2' }}</h5> --}}
{{-- <h1>{{count($name)}}</h1> --}}
{{-- <h1>{{ json_encode($name) }}</h1> --}}

{{-- first we right expression --}}
{{-- <h3>{{ 10 + 10 }}</h3>
<h3>{{ 10 - 10 }}</h3>
<h3>{{ 10 * 10 }}</h3>
<h3>{{ 10 / 10 }}</h3> --}}
{{-- conditions --}}
{{-- @if ($name = 'right')
    <h1>{{ 'nouman ' }}</h1>
@elseif ($name = 'false')
    <h1>{{ 'Nomi' }}</h1>
@else
    <h1>{{ ' not love' }}</h1>
@endif --}}
{{-- loop --}}
@for ($i=0;$i<=10;$i++)
<h1>{{$i}}</h1>
@endfor
{{-- foreach --}}
@foreach ($user as $users )
<h5>{{json_encode($users)}}</h5>
@endforeach
@include('inner');
