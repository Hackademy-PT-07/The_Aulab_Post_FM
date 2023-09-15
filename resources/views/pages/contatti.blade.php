<x-main-esercitazione>
    
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mt-5">      
        <div class="mt-4">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <h1>{{ $title }}</h1>

                    <div class="mt-3">
                        <p class="lead">{{ $text ?? '' }}</p>
                    </div>

                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <!-- nell'action del form va inserita la rotta del save -->
                    <!-- va inserito anche il metodo d'invio del form tramite GET/POST. Il form si invia tramite metoto POST -->
                    <form action="{{ route('contatti.save') }}" method="POST" class="mt-4">

                        <!-- senza la direttiva blade csrf il form non viene raggiunto e pertanto si riceve errore 419 -->
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="message">Messaggio</label>
                                <textarea id="message" name="message" class="form-control" rows="6"></textarea>
                            </div>

                            <!-- condizione necessaria per stampare un messaggio di successo, è legato al "success" indicato nel relativo controller, nella funzione save -->
                            @if(! session()->has('success'))
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Invia Richiesta</button>
                            </div>
                            @endif

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-main-esercitazione>