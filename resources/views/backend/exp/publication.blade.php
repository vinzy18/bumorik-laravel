@extends('backend.layouts.app')

@section('title', __('Publikasi | Our Experience - Page'))

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-book-open mr-2"></i> Publikasi
                    <small class="float-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#new"><i class="fas fa-plus-circle mr-2"></i>Add New</a></small>
                </h4>
                <!-- Modal Add New-->
                <div class="modal fade" id="new" data-backdrop="static" data-keyboard="false" aria-labelledby="newLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Add new Publication</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <form action="{{ route('admin.exp.publikasi.publikasi-upload') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input id="title" class="form-control" type="text" name="title" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="year">Year/Desc</label>
                                            <input id="year" class="form-control" type="text" name="year_desc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="by">By:</label>
                                            <input id="by" class="form-control" type="text" name="by" required>
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
                                <th width="150px">Year/Desc</th>
                                <th>Title</th>
                                <th width="350px">By:</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($public as $pub){
                                    $count  = $count + 1;
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td style="vertical-align: middle;">{{$pub->year_desc}}</td>
                                <td style="vertical-align: middle;">{{$pub->title}}</td>
                                <td style="vertical-align: middle;">{{$pub->by}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm btn-primary btn-edit" href="#" data-id="{{$pub->id}}" data-toggle="modal" data-target="#editRow"><i class="fas fa-pen mr-2"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger public-delete" href="#" data-id="{{$pub->id}}"><i class="fas fa-trash mr-2"></i> Delete</a>
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
