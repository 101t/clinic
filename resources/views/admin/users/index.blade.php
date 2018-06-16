@extends('admin.layouts.base')
@section('title', $CONFIG->name.' | '.__("Users"))
@section('css')
@endsection
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">{{ __("Users") }}</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="{{ url('admin/auth/users') }}" class="m-nav__link"><span class="m-nav__link-text">{{ __("Users") }}</span></a>
                    </li>
                </ul>
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
                                <th>{{ __("Email") }}</th>
                                <th>{{ __("Is Admin") }}</th>
                                <th>{{ __("No of Posts") }}</th>
                                <th class="text-center">{{ __("Option") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ($user->is_admin)? trans('Yes') : trans('No') }}</td>
                                    <td>{{ $user->posts_count }}</td>
                                    <td class="text-center">
                                        <a href="{{ url("/admin/auth/users/{$user->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="{{ trans('Are you sure?') }}" class="btn btn-sm btn-danger">{{ __("Delete") }}</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">{{ __("No user available.") }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
$("#auth_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#user_menu").addClass("m-menu__item--active");
</script>
@endsection