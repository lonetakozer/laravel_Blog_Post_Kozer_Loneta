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


</x-layout>