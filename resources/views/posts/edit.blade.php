@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update Post') }}</div>

                    <div class="card-body">

                        <form method="post" action="{{ route('posts/update', $post->id) }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Post Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $post->title }}" placeholder="Enter post title"
                                    required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Post Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter post description" rows="10" required>{{ $post->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
