<x-layout> 
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Inserisci un articolo
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <form class="card p-5 shadow" action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo:</label>
                      <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}">
                      </div>
                    <div class="mb-3">
                      <input name="image" type="file" class="form-control" id="image">
                      <label class="form-label" for="image">Immaggine:</label>
                    </div>
                   <div class="mb-3">
                  <label class="form-label" for="category">Categoria:</label>
                    <select class="form-control text-capitalize" id="category" name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="body">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7">{{old('body')}}</textarea>
                      </div>
                      <div>
                    <button  class="btn btn-info text-white">Inserisci un articolo</button>
                    <a  class="btn btn-outline-info" href="{{route('homepage')}}">Torna alla home</a>
                </div>
                  </form>
            </div>
        </div>
    </div>
</x-layout>