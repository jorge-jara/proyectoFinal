@extends('layouts.app')

@section('content')
    <h2>Edit Course</h2>

    {{-- COMPLETAR EL FORMULARIO, LINKEARLO A LA RUTA CORRESPONDIENTE --}}
    <form action="{{ route('', $course->id) }}" method="post" class="edit-course-form">
        @csrf

        {{-- COLOCAR EL MÉTODO HTTP NECESARIO --}}
        @method('')
        <label>Title:</label>

        {{-- COLOCAR COMO VALUE, LOS VALORES DE LOS REGISTROS CORRESPONDIENTES --}}
        <input type="text" name="title" value="{{ $-> }}">

        <label>Description:</label>
        <textarea name="description">{{ $-> }}</textarea>

        <label>Language:</label>
        <input type="text" name="language" value="{{ $-> }}">

        <label>Difficulty:</label>
        <select name="difficulty">
            <option value="Beginner" {{ $course->difficulty == 'Beginner' ? 'selected' : '' }}>Beginner</option>
            <option value="Intermediate" {{ $course->difficulty == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
            <option value="Advanced" {{ $course->difficulty == 'Advanced' ? 'selected' : '' }}>Advanced</option>
        </select>

        <label>Instructor:</label>
        <input type="text" name="instructor" value="{{ $-> }}">

        <label>Email:</label>
        <input type="email" name="email" value="{{ $-> }}">

        <input type="submit" value="Update Course">

    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/edit-course.css') }}">
@endpush
