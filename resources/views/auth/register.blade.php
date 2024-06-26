<x-layout>
  <div class="container-fluid p-5 bg-warning text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-1">Registrati</h1>
        </div>
    </div>
    <div class="container my-5 row justify-content-center col-12 col-md-8">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="card p-5 shadow " action="{{route('register')}}" method="POST">
       @csrf
            <div class="mb-3">
              <label for="username" class="form-label">Username:</label>
              <input type="text" name="name" class="form-control" id="username" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="password" >
                
              </div>
              <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation:</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" >
                
              </div>
              <div class="mb-3">
              <button class="btn btn-warning text-dark"> Registrati</button>
                <p class="small mt-2"> Già registrato? <a href="{{route('login')}}">Clicca qui</a></p>
              </div>
             
        </form>
    </div>
</x-layout>