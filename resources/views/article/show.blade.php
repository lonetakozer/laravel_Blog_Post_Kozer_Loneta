<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1">
                <h1>{{$article->title}}</h1>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-around">
            <div class="col-12 col-md-3">
                {{-- <div class="card"> --}}
                    <img src="{{Storage::url($article->image)}}" class="card-img-fluid my-3" alt="...">
                    <div class="text-center">
                        <h2 class="card-text">{{$article->subtitle}}</h2>
                    </div>
                    <div class="my-3 text-muted fst-italic">
                        <p> Redato il {{$article->created_at->format('d/m/Y')}}da{{$article->user->name}}</p>
                    </div>
                </div>
                <hr>
                <p>{{$article->body}}</p>
                <div class="text-center">
                    <a href="{{route('article.index')}}" class="btn btn-info text-white my-5">Torna indietro</a>    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
</x-layout>