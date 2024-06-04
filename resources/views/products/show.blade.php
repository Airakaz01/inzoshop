@extends('layouts.adminApp')
@section('adminContent')
<div class="card mt-4">
        <div class="card-header">
            product Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{$product->title}}</h5>
            <p class="card-text">categorie: {{$product->category}}</p>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            product Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name:</h5>
            <p class="card-text">Email:</p>
            <p class="card-text">Created At:</p>
        </div>
    </div>
@endsection



