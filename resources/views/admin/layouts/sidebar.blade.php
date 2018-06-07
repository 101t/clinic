<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
    <!-- BEGIN: Aside Menu -->
    <div 
        id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item" aria-haspopup="true" id="dashboad_menu">
                <a  href="{{ route('admin:home') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-line-graph"></i>
                    <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                            <span class="m-menu__link-text">{{ __("Dashboard") }}</span>
                            <!--<span class="m-menu__link-badge">
                                <span class="m-badge m-badge--danger">2</span>
                            </span>-->
                        </span>
                    </span>
                </a>
            </li>
            <li class="m-menu__section">
                <h4 class="m-menu__section-text">{{ __("Main") }}</h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" id="content_parent_menu"  data-menu-submenu-toggle="hover">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-layers"></i>
                    <span class="m-menu__link-text">{{ __('Content') }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item " aria-haspopup="true" id="slider_menu">
                            <a href="{{ route('admin:content_slider') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __('Slider') }}</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" id="faq_menu">
                            <a href="{{ route('admin:content_faq') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __("FAQ") }}</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" id="videos_menu">
                            <a href="{{ route('admin:content_videos') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __("Videos") }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" id="blog_parent_menu" data-menu-submenu-toggle="hover">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-share"></i>
                    <span class="m-menu__link-text">{{ __('Blog') }}</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item " aria-haspopup="true" id="posts_menu">
                            <a href="{{ url('admin/blog/posts') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __('Posts') }}</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" id="categories_menu">
                            <a href="{{ url('admin/blog/categories') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __('Categories') }}</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" id="comments_menu">
                            <a href="{{ url('admin/blog/comments') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __('Comments') }}</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true" id="tags_menu">
                            <a href="{{ url('admin/blog/tags') }}" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                                <span class="m-menu__link-text">{{ __('Tags') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->