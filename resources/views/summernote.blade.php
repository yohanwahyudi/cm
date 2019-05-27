@extends('layouts.apphome')

@section('css')
    <!-- <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}"> -->

    <script src="{{ url('/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ url('/js/popper.min.js') }}"></script>
    <script src="{{ url('/js/bootstrap.min.js') }}"></script>

    <link href="{{ url('/css/summernote-bs4.css') }}" rel="stylesheet">
    <script src="{{ url('/js/summernote-bs4.js') }}"></script>
    <script src="{{ url('/js/summernote-bs4.min.js') }}"></script>
@endsection

@section('content')

<div id="summernote"></div>
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>

@endsection
