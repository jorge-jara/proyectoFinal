@extends('layouts.app')

@section('content')
    <h2>Add New Course</h2>
    {{-- COMPLETAR EL FORMULARIO, LINKEARLO A LA RUTA CORRESPONDIENTE Y COLOCAR EL MÉTODO HTTP --}}
    <form class="course-form" action="{{ route('courses.store') }}" method="post">
        @csrf

        {{-- COLOCAR EN EL ATRIBUTO NAME, EL VALOR QUE DEBERÍA  ASÍ COMO UN INDICADOR EN TITLE PARA QUE EL USUARIO SEPA QUÉ ESTÁ INGRESANDO --}}
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="Enter the title">

        <label for="description">Description:</label>
        <textarea id="description" name="description" placeholder="Enter the description"></textarea>

        <label for="language">Language:</label>
        <input type="text" id="language" name="language" placeholder="Enter the language">

        <label for="difficulty">Difficulty:</label>
        <select id="difficulty" name="difficulty">
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select>

        <label for="instructor">Instructor:</label>
        <input type="text" id="instructor" name="instructor" placeholder="Enter the instructor's name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter the instructor's email">

        <input type="submit" value="Add Course">
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/course-form.css') }}">
@endpush

