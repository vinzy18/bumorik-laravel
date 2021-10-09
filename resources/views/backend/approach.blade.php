@extends('backend.layouts.app')

@section('title', __('Our Approach - Page'))

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title mb-0"><i class="fas fa-align-left mr-2"></i> Our Approach - Update</h4>
                    </div>
                </div>
                <form action="{{ route('admin.approach.updates', ['id'=>$updates->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row my-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="actres_desc">Action Research</label>
                                <textarea name="actres_desc" id="actres_desc" class="form-control descCK" required>{!!$updates->actres_desc!!}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="capbuild_desc">Capacity Building</label>
                                <textarea name="capbuild_desc" id="capbuild_desc" class="form-control descCK" required>{!!$updates->capbuild_desc!!}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success float-right"><i class="fas fa-sync mr-2"></i>Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-align-left mr-2"></i> Methods
                    <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#newMethod"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                </h4>
                <div class="table-responsive mt-3">
                    <table id="commonTable" class="table table-hover">                
                        <thead>
                            <tr>
                                <th width="15px">#</th>
                                <th width="150px">Image</th>
                                <th width="150px">Name</th>
                                <th>Description</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($methods as $met){
                                    $count  = $count + 1;
                                    $img    = $met->image==='' ? url('/storage/z_other_case/img-not-found.png') : $met->image;
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td class="text-center">
                                    <img width="100px" height="auto" src="{{ url($img) }}" alt="{{ url( $img) }}">
                                </td>
                                <td style="vertical-align: middle;">{{$met->name}}</td>
                                <td style="vertical-align: middle;">{{Str::limit($met->desc,200)}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$met->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger method-delete" href="#" data-id="{{$met->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
                                </td>
                                
                                <!-- Modal Edit-->
                                <div class="modal fade" id="editRow" data-backdrop="static" data-keyboard="false" aria-labelledby="editLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="mb-0">Edit Method</h4>
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

<!-- Modal Add New-->
<div class="modal fade" id="newMethod" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add new Method</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route('admin.approach.method.met-upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <input id="desc" class="form-control" type="text" name="desc" required>
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
@endsection
