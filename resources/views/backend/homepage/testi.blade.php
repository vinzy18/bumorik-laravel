@extends('backend.layouts.app')

@section('title', __('Home Testimonial'))

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0"><i class="fas fa-comment mr-2"></i> Testimonials</h4>
                    </div>
                    <div class="col-sm-7">
                        <div class="btn-toolbar float-right" role="toolbar">
                            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#newtesti"><i class="fas fa-plus-circle mr-2"></i>Add New</a>
                  
                            <!-- Modal Add New-->
                            <div class="modal fade" id="newtesti" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Add new testimonial</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <form action="{{ route('admin.home.testi.testi-upload') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input id="name" class="form-control" type="text" name="name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="position">Position</label>
                                                        <input id="position" class="form-control" type="text" name="position" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="descCK">Description</label>
                                                        <textarea name="desc" id="descCK" class="form-control" required></textarea>
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
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="commonTable2" class="table table-hover">
                                <thead>
                                <tr>
                                    <th width="15px">#</th>
                                    <th width="150px">Name</th>
                                    <th width="250px">Position</th>
                                    <th>Description</th>
                                    <th width="200px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $count = 0;
        
                                        foreach($testi as $tes){
                                            $count  = $count + 1;
                                    @endphp
                                    <tr>
                                        <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                        <td style="vertical-align: middle;">{{$tes->name}}</td>
                                        <td style="vertical-align: middle;">{{$tes->position}}</td>
                                        <td style="vertical-align: middle;">{!!Str::limit($tes->desc,200)!!}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$tes->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>
                                            <a class="btn btn-sm btn-danger testi-delete" href="#" data-id="{{$tes->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
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
    </div>
</div>


@endsection
