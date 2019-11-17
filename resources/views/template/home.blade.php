@extends('layouts.master')
        
<!-- Blog Post -->
@section('content')
    @foreach ($blogs as $blog)     
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $blog->title }}</h2>
                <p class="card-text">{{ $blog->body}}</p>
                <a href="{{route('public:show', $blog)}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{ $blog->created_at->diffForHumans()}} by
                <a href="#">{{ $blog->author}}</a>
            </div>
        </div>
    @endforeach

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
    </ul>
 @endsection