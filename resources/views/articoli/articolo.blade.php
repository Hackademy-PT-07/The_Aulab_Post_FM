<x-main-esercitazione>
    <x-slot:title>article</x-slot>

    <div class="">        
        <span class="">{{ $article['category'] }}</span>
        <h1 class="">{{ $article['title']}}</h1>

        @if($article->image)
        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}" class="img-fluid">
        @endif

        <div class="">
            {{ $article['description'] }}
        </div>


    </div>

</x-main-esercitazione>