<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-danger">
        <div class="row justify-content-center">
            <div class="display-1">
                <h1>The Blog Post</h1>
            </div>
        </div>
    </div>
    <div>
        @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
        @endif
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <p class="smal text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redato il {{$article->created_at->format('d/m/Y')}}da{{$article->user->name}}
                        <a href="{{route('article.show',compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                        <a href="{{route('article.byCategory',['category => $article->category->id'])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    
    
</x-layout>