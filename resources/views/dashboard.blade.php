@extends('layouts.app')
    @section('content')
    <div>
        Dashboard
        <a href="{{ route('signout') }}" class="btn btn-primary">Sign Out</a>
    </div>

@endsection
	