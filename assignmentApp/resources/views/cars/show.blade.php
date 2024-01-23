@extends('layouts.main')


@section('content')
<h1>Car details</h1>
<div>{{ $contact }}</div>
<a href="{{ route('cars.index') }}">Back to all contacts</a>
@endsection