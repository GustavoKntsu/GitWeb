@extends('layouts.app')
@vite(['resources/css/app.css', 'resources/js/app.js'])


@section('title', 'Página Inicial')

@section('content')
    <div class="max-w-xl mx-auto bg-white rounded-xl shadow-md p-6 space-y-4">
        <h2 class="text-xl font-semibold">Seja bem-vindo!</h2>
        <p>Laravel funcionando lindamente com Tailwind 🎨</p>
    </div>
@endsection
