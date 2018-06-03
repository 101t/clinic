@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | Slider')
@section('css')
@endsection
@section('content')
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
        <h3 class="text-primary">{{ __("Slider") }}</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin:home') }}">{{ __("Home") }}</a></li>
            <li class="breadcrumb-item active">{{ __("Slider") }}</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
	<div class="card">
		<div class="card-title"><h4 style="width:100%;">{{ __("Slider") }}
			<span class="pull-right"><button type="button" onclick="return collection_manage('add', -1);" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> {{ __("Add New") }}</button></span>
		</h4></div>
		<div class="card-body">
			<div class="table-responsive1">
				<table class="table table-sm">
					<thead>
						<tr>
							<th>#</th>
							<th>{{ __("Name") }}</th>
							<th>{{ __("Image") }}</th>
							<th>{{ __("Language") }}</th>
							<th class="text-center">{{ __("Option") }}</th>
						</tr>
					</thead>
					<tbody id="collectionlist"></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="addeditmodal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="addeditmodalform" action="{{ route('admin:content_slider_manage') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">{{ __('Add Slide') }}</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>{{ __('Name') }}</label>
						<input type="text" class="form-control" name="name" value="" maxlength="255" placeholder="{{ __('Name') }}" required>
					</div>
					<div class="form-group">
						<label>{{ __('Description') }}</label>
						<textarea class="form-control" name="body" rows="5" placeholder="{{ __('Description') }}"></textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Background Image') }}</label><br>
						<input type="file" name="img" required>
					</div>
					<div class="form-group">
						<div class="form-check-inline">
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="float" value="false" checked> {{ _("Left") }}
							</label>
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="float" value="true"> {{ _("Right") }}
							</label>
						</div>
					</div>
					<div class="form-group">
						<label>{{ __('URL Button') }}</label>
						<input type="text" class="form-control" name="url" value="" maxlength="255" placeholder="{{ __('URL Button') }}">
					</div>
					<div class="form-group">
						<label>{{ __('Language') }}</label>
						<select class="form-control custom-select" name="lang">
							@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		                    <option value="{{ $localeCode }}">{{ $properties['native'] }}</option>
		                    @endforeach
						</select>
					</div>
					<input type="hidden" name="id" value="-1">
					<input type="hidden" name="s" value="add">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> {{ __('OK') }}</button>
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-times"></i> {{ __('Close') }}</button>
				</div>
			</form>
		</div>
	</div>
</div>
<input type="hidden" name="url2action" value="{{ route('admin:content_slider_manage') }}">
@endsection
@section('js')
<script type="text/javascript">
window.main_trans = {
	addslide: "{{ __('Add Slide') }}",
	editslide: "{{ __('Edit Slide') }}",
	areyousuretodelete: "{{ __('Are you sure to delete?') }}",
	no: "{{ __('No') }}",
	yes: "{{ __('Yes') }}",
	youwontabletorevertthis: "{{ __('You wont be able to revert this!') }}",
	edit: "{{ __('Edit') }}",
	delete: "{{ __('Delete') }}",
};
</script>
<script type="text/javascript" src="{{ asset('admin/scripts/content/slider.js') }}"></script>
@endsection