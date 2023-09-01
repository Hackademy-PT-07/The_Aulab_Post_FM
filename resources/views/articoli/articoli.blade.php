<x-main-esercitazione>
    <x-slot:title>{{ $title }}</x-slot>

        <hr>
    <h1>{{ $title }}</h1>
    <hr>
    <div class="mt-4">
        <div class="row">
            @foreach($articles as $id => $article)
            <x-cardesercitazione :title="$article['title']" :category="$article['category']" :article-id="$id" />
            @endforeach
        </div>
    </div>

</x-main-esercitazione>