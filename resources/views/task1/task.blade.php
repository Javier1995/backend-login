@extends('app')

@section('content')
<h1 class="mb-4">Task 1</h1>
@foreach ($results as $result => $key)

    
    <code> {{$key['list']}} =  {{$key['result']}} </code> </br>
    

@endforeach


@endsection