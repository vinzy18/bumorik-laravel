@extends('backend.layouts.app')

@section('title', __('Home Header'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0"><i class="fas fa-image mr-2"></i> Homepage Header</h4>
            </div>
            <div class="col-sm-7">
                <div class="btn-toolbar float-right" role="toolbar">
                    <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#new"><i class="fas fa-plus-circle mr-2"></i>Add New</a>
          
                    <!-- Modal Add New-->
                    <div class="modal fade" id="new" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="newLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Add new header</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="{{ route('admin.home.header.upload') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="head">Heading Text</label>
                                                <input id="head" class="form-control" type="text" name="heading_text" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="caption">Caption</label>
                                                <input id="caption" class="form-control" type="text" name="caption" required>
                                            </div>
                                            <small class="text-danger"><em>(Ukuran file tidak boleh lebih dari 2MB)</em></small>
                                            <div class="custom-upload">
                                                <input type="file" id="foto" name="image" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp" required hidden>
                                                <label for="foto">Choose file...</label>
                                                <span id="file-chosen">No file chosen</span>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success float-right"><i class="fas fa-paper-plane mr-2"></i>Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        
        <div class="row my-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="commonTable" class="table table-hover">
                        <thead>
                        <tr>
                            <th width="15px">#</th>
                            <th width="150px">Image</th>
                            <th width="300px">Heading Text</th>
                            <th>Caption</th>
                            <th width="200px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;

                                foreach($home as $h){
                                    $count  = $count + 1;
                                    $img    = $h->image==='' ? url('/storage/z_other_case/img-not-found.png') : $h->image;
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td class="text-center">
                                    <img width="100px" height="auto" src="{{ url($img) }}" alt="{{ url( $img) }}">
                                </td>
                                <td style="vertical-align: middle;">{{$h->heading_text}}</td>
                                <td style="vertical-align: middle;">{{$h->caption}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$h->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger header-delete" href="#" data-id="{{$h->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
                                </td>
                                
                                <!-- Modal Edit-->
                                <div class="modal fade" id="editRow" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="mb-0">Edit</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div id="edit-body" class="modal-body">
                                                <!--data generated with ajax-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @php
                            }
                            @endphp
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0"><i class="fas fa-align-left mr-2"></i> Homepage Description</h4>
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col-md-8">
                <form action="{{ route('admin.home.header.desc.update', ['id'=>$desc->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_one">Description 1</label>
                                <textarea name="desc_one" id="desc_one" class="form-control descCK" required>{!!$desc->desc_one!!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc_two">Description 2</label>
                                <textarea name="desc_two" id="desc_two" class="form-control descCK" required>{!!$desc->desc_two!!}</textarea>
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
