@extends('layouts.app')

@section('content')
    <h2>Course Details</h2>
    <div class="course-details">

        {{-- COLOCAR EL TÍTULO DEL CURSO A VER EN DETALLES --}}
        <h3>{{ $-> }}</h3>

        DESPLEGAR CADA DETALLE DEL CURSO
        <p><strong>Description:</strong> {{ $-> }}</p>
        <p><strong>Language:</strong> {{ $-> }}</p>
        <p><strong>Difficulty:</strong> {{ $-> }}</p>
        <p><strong>Instructor:</strong> {{ $-> }}</p>
        <p><strong>Email:</strong> {{ $-> }}</p>
    </div>

    {{-- LINKEAR A LA VISTA INDEX --}}
    <a href="{{ route('') }}" class="back-link">Back to Courses List</a>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/show-course.css') }}">
    @endpush
@endsection
