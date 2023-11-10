<x-main-esercitazione>

    <div class="row">
        <div class="col-6 mx-auto">
            <h1>ACCEDI</h1>
            <div class="card mt-4">
                <div class="card-body">
                    <!-- action="/login" e method="POST" da documentazione Laravel -->
                    <form action="/login" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <!-- da documentazione Laravel, è necessario "email" nei campi -->
                                <label for="email">Inserire l'indirizzo email</label>
                                <input type="email" name="email" id="email" class="form-control">
                                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <!-- da documentazione Laravel, è necessario "password" nei campi -->
                                <label for="password">Inserire la password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Accedi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-main-esercitazione>