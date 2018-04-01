


@extends('admin.pages.layout')

@section('content')

@if(!isset($_FILES))
dd($_FILES);
@endif


<section id="main-content" style="padding-left:30px;">
  <section class="wrapper">

    <div class="row" style="padding-bottom:20px;">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i> პროფილი</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="{{url('/admin/dashboard')}}">მთავარი</a></li>
          <li><i class="icon_table"></i>პროფილი</li>
        </ol>
      </div>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>
        {{ $message }}
      </p>
    </div>

    @endif




    <table class="table table-bordered">
      @foreach($admins as $value)
      <a href="{{ route('image.edit', $value->id) }}" title="განაახლე პროფილის ფოტო">
        <img class="imginprofile" src="http://localhost/GeoLab-Poll/public/img/{{$value->image}}">
      </a>
      <tr>

        <td class="tablebackgroundh">სახელი</td>
        <td class="tablebackground">{{ $value->name }}</td>
      </tr>
      
      
      <tr>
        
        <td class="tablebackgroundh">მეილი</td>
        <td class="tablebackground">{{ $value->email }}</td>
        
      </tr>
      
    </table>

    <div class="row">
      <div class="col-sm-12">
        <div class="full-right">
          <a class="btn btn-md btn-primary" href="{{ route('profile.edit', $value->id) }}">პროფილის რედაქტირება</a>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="full-right">
          <a class="btn btn-md btn-danger" href="{{ route('password.edit', $value->id) }}">პაროლის შეცვლა</a>
        </div>
      </div>
    </div>
    @endforeach
  </section>
</section>
@endsection
