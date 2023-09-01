<x-main-esercitazione>
    <x-slot:title>home</x-slot>

    <hr>
    <h1 class="prova">Benvenuto {{$nome}}, {{$cognome}}</h1>
    <hr>
    <h1 class="mt-4">{{ env('APP_NAME') }}</h1>
    <hr>
    <h1 class="mt-4">{{ config('app.name') }}</h1>

</x-main-esercitazione>