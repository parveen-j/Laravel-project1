@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-6">
    <div class="card text-center">
            <div class="card-header" style="background-color:dodgerblue; font-weight:bold">Companies</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($companies as $company)
                    <li class="list-group-item">{{ $company->name }}</li> 
                    @endforeach
                </ul>
            </div> 
    </div>
</div>
</div>
</div>

@endsection