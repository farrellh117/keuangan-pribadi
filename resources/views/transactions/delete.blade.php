@extends('layouts.app')

@section('content')
    <h2>Delete Transaction</h2>
    <p>Are you sure you want to delete this transaction?</p>
    <form action="{{ route('transactions.destroy', $transaction) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('transactions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
