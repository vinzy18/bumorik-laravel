@extends('backend.layouts.app')

@section('title', __('Our Team - Page'))

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-user-friends mr-2"></i> Training Assistant
                    <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#newAssist"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                </h4>
                <div class="table-responsive mt-3">
                    <table id="commonTable" class="table table-hover">                
                        <thead>
                            <tr>
                                <th width="15px">#</th>
                                <th width="150px">Image</th>
                                <th>Name</th>
                                <th width="100px">Surname</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($assist as $ass){
                                    $count  = $count + 1;
                                    $img    = $ass->image==='' ? url('/storage/z_other_case/img-not-found.png') : $ass->image;
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td class="text-center">
                                    <img width="100px" height="auto" src="{{ url($img) }}" alt="{{ url( $img) }}">
                                </td>
                                <td style="vertical-align: middle;">{{$ass->name}}</td>
                                <td style="vertical-align: middle;">{{$ass->surname}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$ass->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger assist-delete" href="#" data-id="{{$ass->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
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

<!-- Modal Add New-->
<div class="modal fade" id="newAssist" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Add new Lead Research</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route('admin.team.assist.ass-upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input id="surname" class="form-control" type="text" name="surname">
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
