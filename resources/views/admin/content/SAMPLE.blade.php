@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | SAMPLE')
@section('css')
@endsection
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">{{ __("Slider") }}</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
					<li class="m-nav__separator">-</li>
					<li class="m-nav__item">
						<a href="{{ route('admin:content_slider') }}" class="m-nav__link"><span class="m-nav__link-text">{{ __("Slider") }}</span></a>
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
</div>
@endsection
@section('js')
<script type="text/javascript">
$("#content_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#slider_menu").addClass("m-menu__item--active");
</script>
@endsection