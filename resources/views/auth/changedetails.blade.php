@extends('backend.main')
@section('title','Profile')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-8">
            <div class="bg-secondary rounded h-100 p-4">
                <h2>Change User Details</h2>
                @if(Session::has('status'))
                <span class="alert alert-success">{{Session::get('status')}}
                </span>
                @endif
                <form action="{{route('updatedetails')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="changename" class="form-label">Change User's Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Change Name"
                                    value="{{Auth::user()->name}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="ChangeEmail" class="form-label">Change Email <span
                                        class="text-danger">*</span></label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Change Email" value="{{Auth::user()->email}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">
                                Update Details</button>
                        </form>
            </div>
        </div>
    </div>
</div>
@endsection