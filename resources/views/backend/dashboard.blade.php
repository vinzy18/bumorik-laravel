@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card rounded shadow">
            <div class="card-header bg-gradient-dark text-light mb-3">
                <h3 class="card-title mb-0">@lang('Welcome back, :Name !', ['name' => $logged_in_user->name])</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="/admin/dashboard"{{-- {{ route('admin.contact.msg-index') }} --}}><strong>{{-- $countMsg}} --}} pesan baru</strong> via Contact Us <em>—check it out!</em></a>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <i class="fas fa-info-circle mr-2"></i>
                            <a href="{{ route('admin.dashboard') }}"{{-- {{ route('admin.contact.pub-index') }} --}}><strong>{{-- $countPub}} --}} permintaan file Publikasi</strong> <em>—check it out!</em></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
