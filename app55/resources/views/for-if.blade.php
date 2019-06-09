<h1>For if</h1>

@if ($value > 100)
    <p>É maior que 100</p>
@else
    <p>Valor é menor que 100</p>
@endif

@for ($value = 10; $value < 20; $value++)
    <!-- <p>Buceta peluda</p> -->
    - {{$value}}
@endfor

@php
    $value = 0;
@endphp

@while ($value < 20)
    <p>Buceta peluda</p>
    {{$value ++}}
@endwhile

@forelse ([] as $key => $value)
    <p>{{$loop->index}}&nbsp;{{$key}} - {{$value}}</p>
@empty
    <p>Nenhum registro encontrado</p>
@endforelse

@foreach ($myarray as $key => $value)
    <p>{{$loop->index}}&nbsp;{{$key}} - {{$value}}</p>
@endforeach