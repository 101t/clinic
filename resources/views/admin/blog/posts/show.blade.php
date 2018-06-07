@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | Show Post')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">{{ __("Show Post") }}</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="{{ url('admin/blog/posts') }}" class="m-nav__link"><span class="m-nav__link-text">{{ $post->title }} <small>by {{ $post->user->name }}</small></span></a>
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
                                            <a href="{{ url('admin/blog/posts') }}" class="m-nav__link"><i class="la la-reply"></i> {{ __('Go Back') }}</a>
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
                            <p>{{ $post->body }}</p>
                            <p><strong>{{ __("Category") }}: </strong>{{ $post->category->name }}</p>
                            <p><strong>{{ __("Tags") }}: </strong>{{ $post->tags->implode('name', ', ') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
$("#blog_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#posts_menu").addClass("m-menu__item--active");
</script>
@endsection