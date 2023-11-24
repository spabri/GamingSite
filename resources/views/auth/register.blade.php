<x-layout>
    <x-navbar />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    {{-- snippet errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        {{-- redirecting with flashed session data --}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label ">Username</label>
                        <input name= "name" type="text" class="form-control" id="name"
                            aria-describedby="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input name= "email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmation" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
