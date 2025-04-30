@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Contact Message #{{ $contactMessage->id }}</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $contactMessage->name }}</p>
            <p><strong>Email:</strong> {{ $contactMessage->email }}</p>
            <p><strong>Message:</strong> {{ $contactMessage->message }}</p>
            <p><strong>Read:</strong> {{ $contactMessage->read ? 'Yes' : 'No' }}</p>
            <p><strong>Created At:</strong> {{ $contactMessage->created_at->format('d M Y, H:i') }}</p>
        </div>
    </div>
</div>
@endsection
