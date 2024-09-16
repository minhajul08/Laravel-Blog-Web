@extends('layouts.homemaster')

@section('content')

 <div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <div class="">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Welcome Chief!</h4>
                        <p>Name - {{Auth::user()->name}} </p>
                        <hr>
                        <p class="mb-0">Email Address - {{Auth::user()->email}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

@endsection

