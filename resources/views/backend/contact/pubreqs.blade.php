@extends('backend.layouts.app')

@section('title', __('Publication Requests'))

@section('content')

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i class="fas fa-envelope mr-2"></i> Publication Requests
                    <a href="{{route('admin.contact.pub-index')}}" class="float-right btn btn-sm btn-success"><i class="fas fa-sync mr-1"></i>Refresh</a>
                </h4>
                
                <div class="table-responsive mt-3">
                    <table id="commonTable" class="table table-hover">                
                        <thead>
                            <tr>
                                <th width="15px">#</th>
                                <th width="200px">From:</th>
                                <th>Publication Title</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 0;
        
                                foreach($pubreq as $pr){
                                    $count  = $count + 1;
                                    $readClass  = $pr->read==1 ? 'btn-secondary disabled' : 'btn-info';
                                    $readStatus = $pr->read==1 ? 'Read' : 'Mark as read';
                            @endphp
                            <tr>
                                <td style="vertical-align: middle;">@php echo $count; @endphp</td>
                                <td style="vertical-align: middle;" class="user-select-all">{{$pr->email}}</td>
                                <td style="vertical-align: middle;" class="user-select-all">{{$pr->title}}</td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <a class="btn btn-sm {{$readClass}} mark-read" href="#" data-id="{{$pr->id}}"><i class="fas fa-envelope-open mr-1"></i> {{$readStatus}}</a>
                                    <a class="btn btn-sm btn-danger pubreq-delete" href="#" data-id="{{$pr->id}}" data-email="{{$pr->email}}"><i class="fas fa-trash mr-1"></i> Delete</a>
                                </td>
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
