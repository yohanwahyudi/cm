@extends('layouts.apphome')

@section('content')

<div class="masonry-item col-md-10">
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link" href="{{url('createNewChange')}}">Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Attachments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('attachmentsList')}}">History</a>
            </li>
        </ul>
        <br>
    </div>

    <div class="bgc-white p-20 bd">

      <form action="/upload-target" class="dropzone"></form>


    </div>


</div>

<script src="js/dropzone.js"></script>
<link rel="stylesheet" href="css/dropzone.css">

@endsection
