@extends('layout')


@section('content')


   <h1 class="col-md-6">Project Title: {{ $project->title }}</h1>

   <div style="margin:55px; " > 

		<p class="card-content " style="font-size: 20px;">{{$project->description}}</p>
   	


	  	<p >
	  			<a href="/projects/{{$project->id }}/edit"> Edit Project</a>

	  	</p>


   </div>

   <div style="margin:55px; ">


		   @if ($project->tasks->count())
		   <div class="box" style="margin:55px; ">
		   		@foreach ($project->tasks as $task)

			<div>
		   		<form method="POST" action="/completed-tasks/ {{$task->id}}">

		   			@if ($task->completed)

		   				@method('DELETE')
		   			@endif

		   			@csrf
		   			
		   			<label class="checkbox {{ $task->completed ? 'is-complete' : ''}}" for="completed">

		   				<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
		   				{{ $task->description }}


		   			</label>



		   		</form>
		   	
		   	</div>

		   		@endforeach
   </div>

   @endif



{{--    add new task  --}}


 	<form method="POST" action="/projects/ {{ $project->id }}/tasks" class="box">
			

		    @csrf

			
		<label class="col-md-6" for="title"> Add New Task</label>	

			<div class="col-md-6">
				
				<input type="text" class="form-control" name="description" placeholder="New Task " required>

			</div>


		<div class="field">
		

			<div class="col-md-6" style="margin-top: 10px">
				
				<button type="submit" class="button is-link"> Add Task</button> 

			</div>

		</div>

		@include('errors')

		</form>
 </div>

@endsection