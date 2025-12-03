@extends('layouts.app')
@section('content')
    @if(Auth::check() && Auth::user()->role == 'admin')
        <h1>Admin Dashboard</h1>
         <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 m-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    </div>
                 </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 m-1">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        
                    </div>
                </div>
            </div>
         </div>
    @else
        <h1>User Dashboard</h1>
    @endif

@endsection