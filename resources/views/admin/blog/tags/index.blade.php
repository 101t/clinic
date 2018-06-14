@extends('admin.layouts.base')
@section('title', 'Dr. Salim Balin | Tags')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">{{ __("Tags") }}</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="{{ url('admin/blog/tags') }}" class="m-nav__link"><span class="m-nav__link-text">{{ __("Tags") }}</span></a>
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
                                            <a href="{{ url('admin/blog/tags/create') }}" class="m-nav__link"><i class="la la-plus"></i> {{ __('Create New') }}</a>
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
                <table class="table table-striped">
                    <thead class="thead-light">
                        <tr>
                            <th>{{ __("Name") }}</th>
                            <th>{{ __("Action") }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tags as $tag)
                            <tr>
                                <td>{{ $tag->name }}</td>
                                <td>
                                    <a href="{{ url("/admin/blog/tags/{$tag->id}/edit") }}" class="btn btn-xs btn-info">{{ __("Edit") }}</a>
                                    <a href="{{ url("/admin/blog/tags/{$tag->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-xs btn-danger">{{ __("Delete") }}</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="text-center">{{ __('No tag available.') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $tags->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
$("#blog_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#tags_menu").addClass("m-menu__item--active");
</script>
@endsection