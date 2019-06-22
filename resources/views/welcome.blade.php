@extends('layout')

@section('title','Welcome')


@section('content')

<h1 style="font-size: 70px;
                 height: 100%;
 				 width: 100%;
  				 display: flex;
  				 align-items: center;
  				 justify-content: center;">Home page</h1>


 <div class="content">

        <div class="links">

				 <a href="/projects">View Your Project</a>
				 <a href="/notification">Notification Test</a>


		</div>

</div>

@endsection