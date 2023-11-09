<x-main-esercitazione>
    <div class="container mt-5">

        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" value="{{ old('title') }}" id="title" class="form-control" maxlength="150" value="{{ old('title') }}">
                    <!-- aggiunge messaggio "the field is required se lasciato vuoto -->
                    @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="category">Categoria</label>
                    <input type="text" name="category" value="{{ old('category') }}" id="category" class="form-control" value="{{ old('category') }}">
                    <!-- aggiunge messaggio "the field is required se lasciato vuoto -->
                    @error('category') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="description">Descrizione breve</label>
                    <input type="text" name="description" value="{{ old('description') }}" id="description" class="form-control" value="{{ old('description') }}">
                    <!-- aggiunge messaggio "the field is required se lasciato vuoto -->
                    @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label for="body">Corpo</label>
                    <textarea name="body" value="{{ old('body') }}" id="body" rows="10" class="form-control">{{ old('body') }}</textarea>
                    <!-- aggiunge messaggio "the field is required se lasciato vuoto -->
                    @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <button class="btn btn-primary">Salva</button>
                </div>
            </div>
        </form>
    </div>
</x-main-esercitazione>