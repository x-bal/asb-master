@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between p-2">
                    <a href="{{ route('admin.bank.index') }}" class="btn btn-outline-info">Back</a>
                    <h5>cause of loss List</h5>
                </div>
                <form action="{{ route('admin.bank.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.bank.form')
                    <button type="submit" class="btn btn-outline-success float-right">Store</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection