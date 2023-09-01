<x-main-esercitazione>
    <x-slot:title>article</x-slot>

    <div class="">        
        <span class="">{{ $article['category'] }}</span>
        <h1 class="">{{ $article['title']}}</h1>

        <div class="">
            {{ $article['description'] }}
        </div>
    </div>

</x-main-esercitazione>