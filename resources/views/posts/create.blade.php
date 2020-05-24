@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="post" enctype="multipart/form-data">
    @csrf
        <div class="col-8 offset-2">
            <div class="row">
                <h1>
                   add new post
                </h1>
            </div>
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label">post caption</label>


                <input id="name"
                       type="text"
                       class="form-control @error('caption') is-invalid @enderror"
                       name="caption"
                       value="{{ old('caption') }}"
                       required
                       autocomplete="caption" autofocus>

                @error('caption')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row">
                <label for="caption" class="col-md-4 col-form-label">post image</label>

                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row pt-4">
                <button class="btn btn-primary">
                    Add new post
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
