<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">{{ __("Main") }}</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">{{ __("Content") }}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('admin:content_slider') }}">{{ __('Slider') }} </a></li>
                        <li><a href="{{ route('admin:content_faq') }}">{{ __("FAQ") }} </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-comments"></i><span class="hide-menu">{{ __('Blog') }}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/blog/posts') }}">{{ __('Posts') }}</a></li>
                        <li><a href="{{ url('admin/blog/categories') }}">{{ __('Categories') }}</a></li>
                        <li><a href="{{ url('admin/blog/comments') }}">{{ __('Comments') }}</a></li>
                        <li><a href="{{ url('admin/blog/tags') }}">{{ __('Tags') }}</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Charts</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="chart-flot.html">Flot</a></li>
                        <li><a href="chart-morris.html">Morris</a></li>
                        <li><a href="chart-chartjs.html">ChartJs</a></li>
                        <li><a href="chart-chartist.html">Chartist </a></li>
                        <li><a href="chart-amchart.html">AmChart</a></li>
                        <li><a href="chart-echart.html">EChart</a></li>
                        <li><a href="chart-sparkline.html">Sparkline</a></li>
                        <li><a href="chart-peity.html">Peity</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->