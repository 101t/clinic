@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | General Configuration')
@section('css')
<style type="text/css">
@media (min-width: 768px) {.modal-xl {width: 90%;max-width:1200px;}}
</style>
@endsection
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">{{ __("General Configuration") }}</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
					<li class="m-nav__separator">-</li>
					<li class="m-nav__item">
						<a href="{{ route('admin:settings_generalconfig') }}" class="m-nav__link"><span class="m-nav__link-text">{{ __("General Configuration") }}</span></a>
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
								<th>{{ __("Website") }}</th>
								<th>{{ __("Email") }}</th>
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
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<form id="addeditmodalform" action="{{ route('admin:settings_generalconfig_manage') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">{{ __('Add Service') }}</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>{{ __('Name') }}</label>
						<input type="text" class="form-control" name="name" value="Op. Dr. Salim Balin Clinic" maxlength="255" placeholder="{{ __('Name') }}">
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label>{{ __('Logo') }}</label><br>
							<input type="file" name="logo">
							<small class="form-text text-muted">{{ __("Logo size must be 210x56 pixel and *.png format") }}</small>
							<span class="muted-text" id="logo_url"></span>
						</div>
						<div class="col-md-6">
							<label>{{ __('Colored Logo') }}</label><br>
							<input type="file" name="logo2">
							<small class="form-text text-muted">{{ __("Colored Logo size must be 210x56 pixel and *.png format") }}</small>
							<span class="muted-text" id="logo2_url"></span>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label>{{ __('Footer Logo') }}</label><br>
							<input type="file" name="footer">
							<small class="form-text text-muted">{{ __("Footer Logo size must be 210x56 pixel and *.png format") }}</small>
							<span class="muted-text" id="footer_url"></span>
						</div>
						<div class="col-md-6">
							<label>{{ __('Favicon') }}</label><br>
							<input type="file" name="favicon">
							<small class="form-text text-muted">{{ __("Favicon size must be 34x34 pixel and *.png format") }}</small>
							<span class="muted-text" id="favicon_url"></span>
						</div>
					</div>
					<div class="form-group">
						<label>{{ __('Short About') }}</label>
						<textarea class="form-control" name="short_about" rows="5" placeholder="{{ __('Short About') }}">We are a creative studio focusing on culture, luxury, editorial & art. Somewhere between sophistication and simplicity.</textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Short Services') }}</label>
						<textarea class="form-control" name="short_services" rows="5" placeholder="{{ __('Short Services') }}">With more than 40 years of experience in healthcare consulting, we deliver results to help grow your practice. Our comprehensive medical billing services allow you to do what you do best—run your practice.</textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Short Blog') }}</label>
						<textarea class="form-control" name="short_blog" rows="5" placeholder="{{ __('Short Blog') }}">We Create Beautiful Experiences
That Drive Successful Businesses.</textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Short FAQ') }}</label>
						<textarea class="form-control" name="short_faq" rows="5" placeholder="{{ __('Short FAQ') }}">The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels. Whether through commerce or just an experience to tell your brand's story, the time has come to start using development languages that fit your projects needs.</textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Meta description') }}</label>
						<textarea class="form-control" name="meta_description" rows="5" placeholder="{{ __('Meta description') }}"></textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Meta keywords') }}</label>
						<textarea class="form-control" name="meta_keywords" rows="5" placeholder="{{ __('Meta keywords') }}"></textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Google Analytics') }}</label>
						<textarea class="form-control" name="google_analytics" rows="5" placeholder="{{ __('Google Analytics') }}"></textarea>
					</div>
					<div class="form-group">
						<label>{{ __('About') }}</label>
						<textarea class="form-control" name="about" rows="5" placeholder="{{ __('About') }}">We aim high at being focused on building relationships with our clients and community. Using our creative gifts drives this foundation. The time has come to bring those ideas and plans to life. This is where we really begin to visualize your napkin sketches and make them into beautiful pixels. Now that your brand is all dressed up and ready to party, it's time to release it to the world. By the way, let's celebrate already.</textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Address') }}</label>
						<textarea class="form-control" name="address" rows="5" placeholder="{{ __('Address') }}">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label>{{ __('Phone 1') }}</label>
							<input type="text" class="form-control" name="phone1" value="+90 (216) 705 4322" maxlength="25" placeholder="{{ __('Phone 1') }}">
						</div>
						<div class="col-md-4">
							<label>{{ __('Phone 2') }}</label>
							<input type="text" class="form-control" name="phone2" value="+90 (216) 705 4324" maxlength="25" placeholder="{{ __('Phone 2') }}">
						</div>
						<div class="col-md-4">
							<label>{{ __('Mobile') }}</label>
							<input type="text" class="form-control" name="mobile" value="+90 (531) 343 7456" maxlength="25" placeholder="{{ __('Mobile') }}">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label>{{ __('Fax') }}</label>
							<input type="text" class="form-control" name="fax" value="+90 (216) 705 2223" maxlength="25" placeholder="{{ __('Fax') }}">
						</div>
						<div class="col-md-4">
							<label>{{ __('Website') }}</label>
							<input type="text" class="form-control" name="website" value="http://drsalimbalinclinic.com" maxlength="100" placeholder="{{ __('Website') }}">
						</div>
						<div class="col-md-4">
							<label>{{ __('Email') }}</label>
							<input type="text" class="form-control" name="email" value="info@drsalimbalinclinic.com" maxlength="100" placeholder="{{ __('Email') }}">
						</div>
					</div>
					<div class="form-group">
						<label>{{ __("Reset Password") }}</label>
						<div>
							<span class="m-switch">
								<label>
									<input type="checkbox" name="reset_password"/>
									<span></span>
								</label>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label>{{ __('Theme') }}</label>
						<select class="form-control" name="theme" maxlength="24" placeholder="{{ __('Theme') }}">
							<option value="">{{ __("Default") }}</option>
						</select>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label>{{ __('Welcome Message') }}</label>
							<input type="text" class="form-control" name="welcome" value="" maxlength="155" placeholder="{{ __('Welcome Message') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Facebook') }}</label>
							<input type="text" class="form-control" name="facebook" value="" maxlength="155" placeholder="{{ __('Facebook') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Whatsapp') }}</label>
							<input type="text" class="form-control" name="whatsapp" value="" maxlength="155" placeholder="{{ __('Whatsapp') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Viber') }}</label>
							<input type="text" class="form-control" name="viber" value="" maxlength="155" placeholder="{{ __('Viber') }}">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label>{{ __('Skype') }}</label>
							<input type="text" class="form-control" name="skype" value="" maxlength="155" placeholder="{{ __('Skype') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Linkedin') }}</label>
							<input type="text" class="form-control" name="linkedin" value="" maxlength="155" placeholder="{{ __('Linkedin') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Twitter') }}</label>
							<input type="text" class="form-control" name="twitter" value="" maxlength="155" placeholder="{{ __('Twitter') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Instagram') }}</label>
							<input type="text" class="form-control" name="instagram" value="" maxlength="155" placeholder="{{ __('Instagram') }}">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-3">
							<label>{{ __('Google') }}</label>
							<input type="text" class="form-control" name="google" value="" maxlength="155" placeholder="{{ __('Google') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Youtube') }}</label>
							<input type="text" class="form-control" name="youtube" value="" maxlength="155" placeholder="{{ __('Youtube') }}">
						</div>
						<div class="col-md-3">
							<label>{{ __('Vimeo') }}</label>
							<input type="text" class="form-control" name="vimeo" value="" maxlength="155" placeholder="{{ __('Vimeo') }}">
						</div>
					</div>
					<div class="form-group">
						<label>{{ __('User Terms') }}</label>
						<textarea class="form-control" name="useterms" rows="5" placeholder="{{ __('User Terms') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
					</div>
					<div class="form-group">
						<label>{{ __('Privacy Policy') }}</label>
						<textarea class="form-control" name="privacypolicy" rows="5" placeholder="{{ __('Privacy Policy') }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</textarea>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label>{{ __('Latitude') }}</label>
							<input type="text" class="form-control" name="latitude" value="0.0" maxlength="155" placeholder="{{ __('Latitude') }}">
						</div>
						<div class="col-md-6">
							<label>{{ __('Longitude') }}</label>
							<input type="text" class="form-control" name="longitude" value="0.0" maxlength="155" placeholder="{{ __('Longitude') }}">
						</div>
					</div>
					<div class="form-group">
						<label>{{ __('Copyright') }}</label>
						<textarea class="form-control" name="copyright" rows="5" placeholder="{{ __('Copyright') }}"><a href="http://drsalimbalinclinic.com/">Op. Dr. Salim Balin</a> All right reserved</textarea>
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
<input type="hidden" name="url2action" value="{{ route('admin:settings_generalconfig_manage') }}">
@endsection
@section('js')
<script type="text/javascript">
$("#settings_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#generalconfig_menu").addClass("m-menu__item--active");
window.main_trans = {
	adddoctor: "{{ __('Add General Configuration') }}",
	editdoctor: "{{ __('Edit General Configuration') }}",
	areyousuretodelete: "{{ __('Are you sure to delete?') }}",
	no: "{{ __('No') }}",
	yes: "{{ __('Yes') }}",
	youwontabletorevertthis: "{{ __('You wont be able to revert this!') }}",
	edit: "{{ __('Edit') }}",
	delete: "{{ __('Delete') }}",
	preview: "{{ __('Preview') }}",
	noimage: "{{ __('No Image') }}",
};
</script>
<script type="text/javascript" src="{{ asset('admin/scripts/settings/generalconfig.js') }}"></script>
@endsection