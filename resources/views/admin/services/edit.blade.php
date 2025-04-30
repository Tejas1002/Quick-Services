@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Service</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('services.update', $service) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" required>{{ $service->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image URL</label>
                    <input type="url" name="image" id="image" class="form-control" value="{{ $service->image }}" required>
                </div>
                <div class="form-group">
                    <label for="coming_soon">Coming Soon</label>
                    <select name="coming_soon" id="coming_soon" class="form-control">
                        <option value="0" {{ !$service->coming_soon ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $service->coming_soon ? 'selected' : '' }}>Yes</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
