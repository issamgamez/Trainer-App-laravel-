<!-- resources/views/trainers/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Trainer</h2>

        <form action="{{ route('trainers.update', $trainer->id) }}" method="post">
            @csrf
            @method('PUT') 
    
            <div class="form-group">
                <label for="cin">CIN:</label>
                <b>{{ $trainer->cin }}</b>
            </div>

            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" value="{{ $trainer->nom }}" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prenom:</label>
                <input type="text" class="form-control" name="prenom" value="{{ $trainer->prenom }}" required>
            </div>

            <div class="form-group">
                <label for="daten">Date of Birth:</label>
                <input type="date" class="form-control" name="daten" value="{{ $trainer->daten }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Trainer</button>
        </form>
    </div>
@endsection
