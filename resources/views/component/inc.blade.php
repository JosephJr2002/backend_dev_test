@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger shadow p-3 mb-5 bg-body-tertiary rounded">
			{{$error}}
		</div>
	@endforeach
@endif

@if (session('success'))
	<div class="alert alert-success shadow p-3 mb-5 bg-body-tertiary rounded">
			{{session('success')}}
	</div>
@endif

@if (session('error'))
	<div class="alert alert-error shadow p-3 mb-5 bg-body-tertiary rounded"> 
			{{session('error')}}
	</div>
@endif
