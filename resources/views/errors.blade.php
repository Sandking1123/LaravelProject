
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
@if ($errors->any())        

			 <div class="notification is-danger">



			 	<ul>
			 		
			 		@foreach ($errors->all() as $error)


			 		<li>{{ $error }}</li>


			 		@endforeach

			 	</ul>
			 	


			 </div>

		 @endif