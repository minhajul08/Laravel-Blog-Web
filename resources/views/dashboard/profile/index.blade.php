@extends('layouts.homemaster')

@section('content')
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Update UserName</h4>
                <form action="{{route('profile.username')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-2 col-md-12">
                            <label for="inputEmail4" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
                            @error('name')
                                <p class="text-danger">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
