@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | FAQ')
@section('css')
@endsection
@section('content')
<div class="row page-titles">
	<div class="col-md-5 align-self-center">
        <h3 class="text-primary">{{ __("FAQ") }}</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin:home') }}">{{ __("Home") }}</a></li>
            <li class="breadcrumb-item active">{{ __("FAQ") }}</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
	<div class="card">
		<div class="card-title"><h4 style="width:100%;">{{ __("FAQ") }}
			<span class="pull-right"><button type="button" onclick="return collection_manage('add', -1);" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> {{ __("Add New") }}</button></span>
		</h4></div>
		<div class="card-body">
			<div class="table-responsive1">
				<table class="table table-sm">
					<thead>
						<tr>
							<th>#</th>
							<th>{{ __("Name") }}</th>
							<th>{{ __("Icon") }}</th>
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
			<form id="addeditmodalform" action="{{ route('admin:content_faq_manage') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">{{ __('Add Faq') }}</h4>
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
						<label>{{ __('Icon') }}</label>
						<select id="aem_lang" class="form-control custom-select" name="icon" value="" maxlength="50" placeholder="{{ __('Icon') }}"></select>
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
<input type="hidden" name="url2action" value="{{ route('admin:content_faq_manage') }}">
@endsection
@section('js')
<script type="text/javascript">
window.main_trans = {
	addfaq: "{{ __('Add FAQ') }}",
	editfaq: "{{ __('Edit FAQ') }}",
	areyousuretodelete: "{{ __('Are you sure to delete?') }}",
	no: "{{ __('No') }}",
	yes: "{{ __('Yes') }}",
	youwontabletorevertthis: "{{ __('You wont be able to revert this!') }}",
	edit: "{{ __('Edit') }}",
	delete: "{{ __('Delete') }}",
};
</script>
<script type="text/javascript" src="{{ asset('admin/scripts/content/faq.js') }}"></script>
@endsection