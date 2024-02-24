<!-- resources/views/trainers/create.blade.php -->

@extends('layouts.app')
 
@section('content')
    <div class="container mt-5">
        <h2>Create New Trainer</h2>

        <form action="{{ route('trainers.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="cin">CIN:</label>
                <input type="text" class="form-control" name="cin" required>
            </div>

            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prenom:</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="daten">Date of Birth:</label>
                <input type="date" class="form-control" name="daten" required>
            </div>

            <button type="submit" class="btn btn-success">Create Trainer</button>
        </form>
    </div>
@endsection
