@extends('backend.layouts.app')

@section('title', __('Our Team - Page'))

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-user-tie mr-2"></i> Lead Researchers
                    <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#newLead"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                </h4>
                <div class="table-responsive mt-3">
                    <table id="commonTable" class="table table-hover">                
                        <thead>
                            <tr>
                                <th width="15px">#</th>
                                <th width="150px">Image</th>
                                <th width="150px">Name</th>
                                <th width="150px">Surname</th>
                                <th>Description</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($lead as $le){
                                    $count  = $count + 1;
                                    $img    = $le->image==='' ? url('/storage/z_other_case/img-not-found.png') : $le->image;
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td class="text-center">
                                    <img width="100px" height="auto" src="{{ url($img) }}" alt="{{ url( $img) }}">
                                </td>
                                <td style="vertical-align: middle;">{{$le->name}}</td>
                                <td style="vertical-align: middle;">{{$le->surname}}</td>
                                <td style="vertical-align: middle;">{{Str::limit($le->desc,200)}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$le->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>

                                    @if($le->id==2) @continue @else
                                    <a class="btn btn-sm btn-danger lead-delete" href="#" data-id="{{$le->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
                                    @endif
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
<div class="modal fade" id="newLead" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
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
                    <form action="{{ route('admin.team.lead.lead-upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input id="surname" class="form-control" type="text" name="surname">
                        </div>
                        <div class="form-group">
                            <label for="descCK">Description</label>
                            <textarea name="desc" id="descCK" class="form-control " required></textarea>
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
