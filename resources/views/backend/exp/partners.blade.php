@extends('backend.layouts.app')

@section('title', __('Partners | Our Experience - Page'))

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-handshake mr-2"></i> Partners
                    <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#new"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                </h4>
                <!-- Modal Add New-->
                <div class="modal fade" id="new" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Add new Partner</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form action="{{ route('admin.exp.partners.partners-upload') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Partner name</label>
                                            <input id="name" class="form-control" type="text" name="name" required>
                                        </div>
                                        <small class="text-danger"><em>(Ukuran file tidak boleh lebih dari 1MB)</em></small>
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
                <div class="table-responsive mt-3">
                    <table id="commonTable" class="table table-hover">                
                        <thead>
                            <tr>
                                <th width="15px">#</th>
                                <th width="150px">Image</th>
                                <th width="300px">Partner</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($partners as $par){
                                    $count  = $count + 1;
                                    $img    = $par->image==='' ? url('/storage/z_other_case/img-not-found.png') : $par->image;
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td class="text-center">
                                    <img width="100px" src="{{ url($img) }}" alt="{{ url( $img) }}">
                                </td>
                                <td style="vertical-align: middle;">{{$par->name}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$par->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger partner-delete" href="#" data-id="{{$par->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
                                </td>
                                
                                <!-- Modal Edit-->
                                <div class="modal fade" id="editRow" data-backdrop="static" data-keyboard="false" aria-labelledby="editLabel" aria-hidden="true">
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

@endsection
