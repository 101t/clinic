@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | FAQ')
@section('css')
@endsection
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">{{ __("FAQ") }}</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
					<li class="m-nav__separator">-</li>
					<li class="m-nav__item">
						<a href="{{ route('admin:content_faq') }}" class="m-nav__link"><span class="m-nav__link-text">{{ __("FAQ") }}</span></a>
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
					<table class="table table-striped">
						<thead class="thead-light">
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
$("#content_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#faq_menu").addClass("m-menu__item--active");
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