<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('admin.contact.index') }}" class="waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.faq.index') }}" class="waves-effect">
                        <i class="mdi mdi-comment-question-outline"></i>
                        <span key="t-faqs">FAQ</span>
                    </a>
                </li>

                {{-- Blogs --}}
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-code-alt"></i>
                        <span key="t-section">All Blogs</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li class="@yield('blog_category')">
                            <a href="{{ route('admin.blogs_category.index') }}" class="waves-effect">
                                <span key="t-contacts">Blog Category</span>
                            </a>
                        </li>

                        <li class="@yield('blogs')">
                            <a href="{{ route('admin.blogs.index') }}" class="waves-effect">
                                <span key="t-contacts">Blogs Section</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="@yield('testimonial')">
                    <a href="{{ route('admin.testimonials.index') }}" class="waves-effect">
                        <i class='bx bx-message-rounded-detail'></i>
                        <span key="t-brands">Testimonial</span>
                    </a>
                </li>

                <li class="@yield('about_us')">
                    <a href="{{ route('admin.about_us.index') }}" class="waves-effect">
                        <i class='bx bx-message-dots'></i>
                        <span key="t-brands">About Us</span>
                    </a>
                </li>

                <li class="@yield('portfolio')">
                    <a href="{{ route('admin.portfolio.index') }}" class="waves-effect">
                        <i class='bx bx-layer-plus'></i>
                        <span key="t-brands">Portfolio</span>
                    </a>
                </li>

                <li class="@yield('skill')">
                    <a href="{{ route('admin.skills.index') }}" class="waves-effect">
                        <i class='bx bx-pen'></i>
                        <span key="t-brands">Skills</span>
                    </a>
                </li>

                <li class="@yield('experience')">
                    <a href="{{ route('admin.experience.index') }}" class="waves-effect">
                        <i class='bx bx-archive'></i>
                        <span key="t-brands">Experience</span>
                    </a>
                </li>

                <li class="@yield('service')">
                    <a href="{{ route('admin.service.index') }}" class="waves-effect">
                        <i class='bx bx-bar-chart-square'></i>
                        <span key="t-brands">Services</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.brand.index') }}" class="waves-effect">
                        <i class="bx bx-cube-alt"></i>
                        <span key="t-brands">Brand</span>
                    </a>
                </li>

                <li class="@yield('cpage_list')">
                    <a href="{{ route('admin.cpage.index') }}" class="waves-effect">
                        <i class='bx bx-window-alt'></i>
                        <span key="t-section">Custom Pages</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.setting.general.setting') }}" class="waves-effect">
                        <i class='bx bx-cog'></i>
                        <span key="t-section">settings</span>
                    </a>
                </li>

                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <button type="submit" style="border: none;
                            background: transparent;">
                            <i class="bx bx-power-off align-middle me-1 text-danger"></i> 
                            <span key="t-logout">Logout</span>
                        </button>    
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
