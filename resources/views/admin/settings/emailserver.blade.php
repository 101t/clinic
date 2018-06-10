@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | Email Server')
@section('css')
@endsection
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">{{ __("Email Server") }}</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
					<li class="m-nav__separator">-</li>
					<li class="m-nav__item">
						<a href="{{ route('admin:settings_emailserver') }}" class="m-nav__link"><span class="m-nav__link-text">{{ __("Email Server") }}</span></a>
					</li>
				</ul>
			</div>
			<div>
				<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
					<a href="javascript:void(0)" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
						<i class="la la-plus m--hide"></i>
						<i class="la la-ellipsis-h"></i>
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
										<li class="m-nav__section m-nav__section--first m--hide">
											<span class="m-nav__section-text">{{ __('Quick Actions') }}</span>
										</li>
										<li class="m-nav__item">
											<a href="javascript:void(0)" onclick="return collection_manage('add', -1);" class="m-nav__link"><i class="la la-plus"></i> {{ __('Add New') }}</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="m-content">
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__body">
				<div class="row">@include('flash::message')</div>
				<div class="m-form m-form--label-align-right m--margin-top-0 m--margin-bottom-30">
					<div class="form-group row align-items-center">
						<div class="col-12">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input" autocomplete="off" placeholder="{{ __('Search') }}" name="q" id="search_filter">
								<span class="m-input-icon__icon m-input-icon__icon--left"><span><i class="la la-search"></i></span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="table-responsive1">
					<table class="table table-sm">
						<thead>
							<tr>
								<th>#</th>
								<th>{{ __("Server") }}</th>
								<th>{{ __("Port") }}</th>
								<th>{{ __("SSL") }}</th>
								<th>{{ __("Active") }}</th>
								<th>{{ __("Username") }}</th>
								<th class="text-center">{{ __("Option") }}</th>
							</tr>
						</thead>
						<tbody id="collectionlist"></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="addeditmodal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form id="addeditmodalform" action="{{ route('admin:settings_emailserver_manage') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">{{ __('Add Email Server') }}</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>{{ __('Server') }}</label>
						<input type="text" class="form-control" name="server" value="" maxlength="255" placeholder="{{ __('Server') }}" required>
					</div>
					<div class="form-group">
						<label>{{ __('Port') }}</label>
						<input type="text" class="form-control" name="port" value="" maxlength="3" placeholder="{{ __('Port') }}" required>
					</div>
					<div class="form-group">
						<label>{{ __('Username') }}</label>
						<input type="text" class="form-control" name="username" value="" maxlength="255" placeholder="{{ __('Username') }}" required>
					</div>
					<div class="form-group">
						<label>{{ __('Password') }}</label>
						<input type="text" class="form-control" name="password" value="" maxlength="255" placeholder="{{ __('Password') }}" required>
					</div>
					<div class="form-group col-6">
						<label>{{ __('SSL Support') }}</label><br>
						<label class="switch switch-3d switch-primary">
							<input type="checkbox" class="switch-input" name="ssl" id="ssl" value="ssl">
            				<span class="switch-label"></span>
            				<span class="switch-handle"></span>
						</label>
					</div>
					<div class="form-group col-6">
						<label>{{ __('Active') }}</label><br>
						<label class="switch switch-3d switch-primary">
							<input type="checkbox" class="switch-input" name="active" id="active" value="active">
            				<span class="switch-label"></span>
            				<span class="switch-handle"></span>
						</label>
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
<input type="hidden" name="url2action" value="{{ route('admin:settings_emailserver_manage') }}">
@endsection
@section('js')
<script type="text/javascript">
$("#settings_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#emailserver_menu").addClass("m-menu__item--active");
window.main_trans = {
	addemailserver: "{{ __('Add Email Server') }}",
	editemailserver: "{{ __('Edit Email Server') }}",
	areyousuretodelete: "{{ __('Are you sure to delete?') }}",
	no: "{{ __('No') }}",
	yes: "{{ __('Yes') }}",
	youwontabletorevertthis: "{{ __('You wont be able to revert this!') }}",
	edit: "{{ __('Edit') }}",
	delete: "{{ __('Delete') }}",
	youcannotaddmorethanoneserver: "{{ __('You cannot add more than one server') }}",
};
</script>
<script type="text/javascript" src="{{ asset('admin/scripts/settings/emailserver.js') }}"></script>
@endsection