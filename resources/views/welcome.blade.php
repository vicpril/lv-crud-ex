@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
  .tutorials-link {
    color: grey !important;
    padding-left: 6px;
  }
</style>
<div class="uper">
  <div class="header">
    <h1>Tutorials</h1>
  </div>

  <ul>
    <li>
      <a href="{{ route('shares.index') }}">Laravel 5.7 CRUD Example Tutorial For Beginners From Scratch</a>
      <a href="https://appdividend.com/2018/09/06/laravel-5-7-crud-example-tutorial/" class="tutorials-link" target="_blank">Manual</a>
    </li>
    <li>
      <a href="{{ route('home-file') }}">Laravel File Upload Example</a>
      <a href="https://appdividend.com/2018/08/15/laravel-file-upload-example/" class="tutorials-link" target="_blank">Manual</a>
    </li>
  </ul>


</div>

@endsection