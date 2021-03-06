@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="row justify-content-center">
  <div class="col-md-9">
    <div class="card">
      <div class="card-header bg-primary text-white text-center">
        <h2 class='display-4 my-0'>Tutorials</h2>
      </div>
      <div class="card-body">
        <ul>
          <li>
            <a href="{{ route('shares.index') }}">Laravel 5.7 CRUD Example Tutorial For Beginners From Scratch</a>
            <a href="https://appdividend.com/2018/09/06/laravel-5-7-crud-example-tutorial/" class="tutorials-link text-secondary" target="_blank">Manual</a>
          </li>
          <li>
            <a href="{{ route('home-file') }}">Laravel File Upload Example</a>
            <a href="https://appdividend.com/2018/08/15/laravel-file-upload-example/" class="tutorials-link text-secondary" target="_blank">Manual</a>
          </li>
          
        </ul>
      </div>
    </div>
    </div>
  </div>
</div>

@endsection