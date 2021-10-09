@extends('backend.layouts.app')

@section('title', __('About Us - Page'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title mb-0"><i class="fas fa-align-left mr-2"></i>Update Pemilihan</h4>

            </div>
        </div>
        <div class="row content my-4">
            <form action="/" method="post" class="mb-5">
            @csrf
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                        {{-- @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Kategorial</label>
                        <select class="form-select @error('jabatan') @enderror" name="jabatan" required>
                            <option value="kategorial">PKB</option>
                            <option value="kategorial">WKI</option>
                            {{-- @foreach ( $categories as $category )
                                @if (old('jabatan') == $category->id)
                                    <option value="{{ $category->id }}"  selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                            @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </select>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select class="form-select @error('jabatan') @enderror" name="jabatan" required>
                            <option value="kategorial">Ketua</option>
                            <option value="kategorial">Wakil Ketua</option>
                            {{-- @foreach ( $categories as $category )
                                @if (old('jabatan') == $category->id)
                                    <option value="{{ $category->id }}"  selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                            @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror --}}
                        </select>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="mb-3">
                        <label for="body" class="form-label">Upload Foto</label>
                        <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" required value="{{ old('body') }}">
                        {{-- <trix-editor input="body"></trix-editor>
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror --}}
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </div>


            </form>
        </div>
    </div>
</div>




@endsection
