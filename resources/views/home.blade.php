<x-main-esercitazione>
    <x-slot:title>home</x-slot>

    <hr>
    <h1 class="prova">Benvenuto {{$nome}}, {{$cognome}}</h1>
    <hr>
    <h1 class="mt-4">{{ env('APP_NAME') }}</h1>
    <hr>
    <h1 class="mt-4">{{ config('app.name') }}</h1>

    <div class="container mt-5">
        <div class="text-end">
            @if($auth)
                <span>{{ $auth['name'] }} - {{ $auth['email'] }}</span>
            @else
                <a href="/login">Accedi</a>
            @endif
        </div>

</x-main-esercitazione>