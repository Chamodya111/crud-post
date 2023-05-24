@extends('layouts.app')
@section('content')

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                  #{{ $post->id }}
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->description }}</p>
                </div>
                <div class="card-footer text-body-secondary">
                  {{ date('Y-m-d', strtotime($post->created_at)) }}
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
