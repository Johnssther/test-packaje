@extends('inspire::app')

@section('content')
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
            {{ $quote }}
        </div>
    </div>
@endsection
