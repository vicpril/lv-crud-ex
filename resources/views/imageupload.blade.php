@extends('layouts.app')

@section('title', 'Laravel Multiple Images Upload Using Dropzone')

@section('styles')
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
@endsection

@section('scripts')
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
@endsection

@section('content')

  <!-- imageupload.blade.php -->
  <div class="container">

      <h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>
      <form method="post" action="{{url('image/upload/store')}}" enctype="multipart/form-data" 
                    class="dropzone" id="dropzone">
      @csrf
  </form>   

@endsection
  
 