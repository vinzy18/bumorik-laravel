@extends('backend.layouts.app')

@section('title', __('Footer'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">Footer section</h4>
            </div>
        </div>
        
        <div class="row mt-4 mb-4">
            <div class="col-md-8">
                <form action="{{ route('admin.footer.update', ['id'=>$updates->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="address">Address</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text" id="address"><i class="fas fa-map-marker-alt"></i></span></div>
                                <input type="text" aria-describedby="address" name="address" class="form-control" value="{{$updates->address}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text" id="email"><i class="fas fa-envelope"></i></span></div>
                                <input type="email" aria-describedby="email" name="email" class="form-control" value="{{$updates->email}}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <label for="phone">Phone</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text" id="phone"><i class="fas fa-phone"></i></span></div>
                                <input type="text" aria-describedby="phone" name="phone" class="form-control" value="{{$updates->phone}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="facebook">Facebook</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text" id="facebook"><i class="fab fa-facebook"></i></span></div>
                                <input type="text" aria-describedby="facebook" name="fb" class="form-control" value="{{$updates->fb}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="instagram">Instagram</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text" id="instagram"><i class="fab fa-instagram"></i></span></div>
                                <input type="text" aria-describedby="instagram" name="ig" class="form-control" value="{{$updates->ig}}"autofocus>
                            </div>
                            <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
