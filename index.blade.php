@extends('layouts.app')

@section('content')

    <h2>Courses List</h2>

    <a class="add-course-button" href="{{ route('courses.create') }}">Add New Course</a>

    <table class="courses-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Language</th>
                <th>Difficulty</th>
                <th>Instructor</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <!-- COMPLETAR: Recorre cada curso en la variable $courses.Permite iterar o recorrer cada elemento de una colección o un array y lo guarda en $course.-->
            @foreach ($ as $)
                <tr>
                    <!-- COMPLETAR: Muestra la información del curso en las celdas correspondientes, los datos son mandados desde el controlador -->
                    <td>{{ $-> }}</td>
                    <td>{{ $-> }}</td>
                    <td>{{ $-> }}</td>
                    <td>{{ $-> }}</td>
                    <td>{{ $-> }}</td>
                    <td>{{ $-> }}</td>

                    <td class="actions-cell">
                        <!-- COMPLETAR: RUTEAR EL URL HACIA LA VISTA SHOW.BLADE.PHP -->
                        <a class="view-course-button" href="{{ route('', $course->id) }}">View</a>

                        <!-- COMPLETAR: RUTEAR EL URL HACIA LA VISTA EDIT.BLADE.PHP -->
                        <a class="edit-link" href="{{ route('', $course->id) }}">Edit</a>

                        <!-- COMPLETAR EL FORMULARIO PARA ELIMINAR EL CURSO, RUTEARLO Y COLOCAR EL MÉTODO NECESARIO PARA EL FIN-->
                        <form class="delete-form" action="{{ route('', $course->id) }}" method="post">
                            @method('')
                            @csrf
                            <button type="submit" class="delete-button">Delete</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('styles')
      <link rel="stylesheet" href="{{ asset('css/courses-list.css') }}">
@endpush
