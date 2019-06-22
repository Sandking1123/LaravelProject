@extends('layout')


@section('content')
	<h1 class="col-md-6"> Create New Projects </h1>


    {{-- Form of create New Project--}}

	<form method="POST" action="/projects">

	{{csrf_field() }}


		<div class="field">
				

			<div class="col-md-6" style="margin-top: 20px;">
				
				<input input type="text" name="title" class="form-control {{$errors->has('title') ? 'is-danger' : ''}}" placeholder="Project Title" value="{{ old('title')}}">

			</div>
		</div>
			    


		<div class="field">
				

			<div class="col-md-6" style="margin-top: 20px;">
				
				<textarea name="description" class="form-control {{$errors->has('title') ? 'is-danger' : ''}}" placeholder="Project Description" >{{ old('description')}}</textarea> 
			</div>
 		</div>


		<div class="field">
				
			  
			 <div class="col-md-6" style="margin-top: 20px;">
				
				<button type="submit" class="botton btn-link">Create New Project</button> 
			    
			 </div>
		</div>



		@include('errors')

	</form>
@endsection