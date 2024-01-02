<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">Register</h1>
            </div>
            <div class="col-12 my-5">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li> 
                        @endforeach
                    </ul>
              </div>   
                @endif

                <form method="POST" action="{{ route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Email address</label>
                        <input type="name" class="form-control" id="name" aria-describedby="namelHelp" name="name" value="{{old('name')}}">
                        @error('email') <p class="text-danger">{{ $message }}</p> @enderror                          
                        </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                      @error('email') <p class="text-danger">{{ $message }}</p> @enderror                          
                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password"name="password">
                      @error('password') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation"name="password_confirmation">
                        @error('password_confirmation') <p class="text-danger">{{ $message }}</p> @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                    <p class="small mt-2">Already registered? <a href="{{route('login')}}">Clicca qui</a></p>
                  </form>
            </div>
        </div>
    </div>
</x-layout>