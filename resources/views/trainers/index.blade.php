@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Trainers List</h2>

        <a href="{{ route('trainers.create') }}" class="btn btn-primary mb-3">Create New Trainer</a>

        @if($trainers->isEmpty())
            <p class="alert alert-info">Empty table</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <!-- <th>ID</th>
                        <th>CIN</th> -->
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date of Birth</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainers as $trainer)
                        <tr>
                            <!-- <td>{{ $trainer->id }}</td> -->
                            <!-- <td>{{ $trainer->cin }}</td> -->
                            <td>{{ $trainer->nom }}</td>
                            <td>{{ $trainer->prenom }}</td>
                            <td>{{ $trainer->daten }}</td> 
                            <td>
                                <a href="{{ route('trainers.show', $trainer->id) }}" class="btn btn-info"> Show</a>
                                <a href="{{ route('trainers.edit', $trainer->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('trainers.destroy', $trainer->id) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete {{($trainer->nom)}} {{($trainer->prenom)}} ?')"> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
