@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h2><small>Visitor Type Management </small></h2></div>
				<div class="panel-body">
					<div class="page-header">
						<h4>Edit Visitor Type </h4>
					</div>
					
					<form action="{{ action('CommonController@handleEditVisitortype') }}" method="post" role="form">
						<input type="hidden" name="id" value="{{ $visitortype->id }}">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" class="form-control" name="name" value="{{ $visitortype->name }}" />
							@if ($errors->has('name')) <p class="error-block">{{ $errors->first('name') }}</p> @endif
						</div>
						<input type="hidden" name="_token" value="{!! csrf_token() !!}">
						<input type="submit" value="Save" class="btn btn-primary" />
						<a href="{{ action('CommonController@visitortypes') }}" class="btn btn-link">Cancel</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
