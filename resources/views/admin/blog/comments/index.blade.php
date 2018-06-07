@extends('admin.layouts.base')
@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">{{ __("Comments") }}</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home"><a href="{{ route('admin:home') }}" class="m-nav__link m-nav__link--icon"><i class="m-nav__link-icon la la-home"></i></a></li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="{{ url('admin/blog/commets') }}" class="m-nav__link"><span class="m-nav__link-text">{{ __("Comments") }}</span></a>
                    </li>
                </ul>
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
                            <th>{{ __("Post") }}</th>
                            <th>{{ __("Comment") }}</th>
                            <th>{{ __("Action") }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($comments as $comment)
                            <tr>
                                <td>{{ $comment->post->title }}</td>
                                <td>{{ $comment->body }}</td>
                                <td>
                                    <a href="{{ url("/admin/blog/comments/{$comment->id}") }}" data-method="DELETE" data-token="{{ csrf_token() }}" data-confirm="Are you sure?" class="btn btn-sm btn-danger">{{ __("Delete") }}</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">{{ __("No comment available.") }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $comments->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
$("#blog_parent_menu").addClass("m-menu__item--open").addClass("m-menu__item--expanded");
$("#comments_menu").addClass("m-menu__item--active");
</script>
@endsection