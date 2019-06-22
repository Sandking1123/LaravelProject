@extends('layout')


@section('content')


<h1 class="col-md-6"> Edit Project </h1>



   {{-- Form of Edit Project --}}
   
	<form method="POST" action="/projects/ {{ $project->id }}">
			

			@method('PATCH')
		    @csrf

		<div class="field">
			
			<label class="col-md-6"  for="title"> Title</label>	

			<div class="col-md-6" >
				
				<input type="text" name="title" placeholder="Title" class="form-control" value="{{ $project->title }}" required>
			</div>

		</div>
		    


		<div class="field">
			
		    <label class="col-md-6"  for="description"> Description</label>	

			    <div class="col-md-6" >
				
					<textarea name="description" class="form-control" required>{{ $project->description }} </textarea> 
			    </div>
		</div>

		<div class="field">
			
		  
		    <div class="col-md-6" style="margin-top: 20px;">
			
				<button type="submit" class="botton btn-link">Update Project</button> 
		    </div>
		 
		</div>


		</form>

		    @include('errors')

 	    <form method="POST" action="/projects/ {{ $project->id }}">
 	    	
		
			@method('DELETE')
		    @csrf


         <div class="field" style="margin-top: 20px;">
			
		  
		     <div class="col-md-6">
			
			<button type="submit" class="botton btn-link">Delete Project</button> 

		    </div>
		    
		 </div>

 	    </form>



@endsection