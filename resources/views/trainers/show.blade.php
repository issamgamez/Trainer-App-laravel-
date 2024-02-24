<!-- resources/views/trainers/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Trainer Details</h2>

    <p><strong>ID:</strong> {{ $trainer->id }}</p>
    <p><strong>CIN:</strong> {{ $trainer->cin }}</p>
    <p><strong>Nom:</strong> {{ $trainer->nom }}</p>
    <p><strong>Prenom:</strong> {{ $trainer->prenom }}</p>
    <p><strong>Date of Birth:</strong> {{ $trainer->daten }}</p>

    <a href="{{ route('trainers.index') }}" class="btn btn-primary">Back to List</a>
    <form action="{{ route('trainers.destroy', $trainer->id) }}" method="post" style="display: inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete {{($trainer->nom)}} {{($trainer->prenom)}} ?')"> Delete</button>
    </form>
    <a href="{{ route('trainers.edit', $trainer->id) }}" class="btn btn-warning">Edit</a>
@endsection
