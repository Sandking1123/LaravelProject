@extends('layout')


@section('content')

<div class="card">


            <div class="card-header" style="font-size: 30px; font-weight: bold;">Projects </div>

            {{-- Show all projects that belongs to owner_id --}}

	<ul>

		@foreach ($projects as $project)


		<li>

			<a href="/projects/{{$project->id}}">
			{{ $project -> title}}
			</a>

		</li>

		@endforeach

	</ul>

</div>



	<div class="content" style="margin-top: 11px">

		@if (session('message'))

				<p style="color: green;">{{ session('message')}}</p> 
		@endif

	</div>


	<div class="content" style="font-size: 30px; font-weight: bold; margin-top: 11px">

		<a href="/projects/create">Create New Project</a>

	</div>

	
@endsection