@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit resume</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('resumes.update', $resume->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="edit-title">
                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                    <div class="col-md-6">
                                        <input
                                            id="title"
                                            type="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            name="title"
                                            value="{{ old('title') ??  $resume->title }}"
                                            required
                                            autocomplete="title"
                                            autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                            </div>

                            <div class="edit-name">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                    <div class="col-md-6">
                                        <input
                                            id="name"
                                            type="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name"
                                            value="{{ old('name') ?? $resume->name }}"
                                            required
                                            autocomplete="name"
                                            autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                            </div>

                            <div class="edit-email">
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">
                                        <input
                                            id="email"
                                            type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email"
                                            value="{{ old('email') ?? $resume->email }}"
                                            required
                                            autocomplete="email"
                                            autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                            </div>

                            <div class="edit-website">
                                <div class="form-group row">
                                    <label for="website" class="col-md-4 col-form-label text-md-right">Website</label>

                                    <div class="col-md-6">
                                        <input
                                            type="website"
                                            class="form-control @error('website') is-invalid @enderror"
                                            name="website"
                                            value="{{ old('website') ?? $resume->website }}"
                                            autocomplete="website"
                                            autofocus>

                                        @error('website')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                            </div>

                            <div class="edit-picture">
                                <div class="form-group row">
                                    <label for="picture" class="col-md-4 col-form-label text-md-right">Picture</label>

                                    <div class="col-md-6">
                                        <input
                                            type="file"
                                            class="form-control @error('picture') is-invalid @enderror"
                                            name="picture">

                                        @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                            </div>

                            <div class="edit-abaut">
                                <div class="form-group row">
                                    <label for="abaut" class="col-md-4 col-form-label text-md-right">Abaut</label>

                                    <div class="col-md-6">
                                        <textarea
                                            class="form-control @error('abaut') is-invalid @enderror"
                                            name="abaut"
                                            value="{{ old('abaut') ?? $resume->abaut }}"
                                            autocomplete="abaut"
                                            autofocus></textarea>

                                        @error('abaut')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
