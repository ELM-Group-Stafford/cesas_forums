<header id="pageHeader">
    <div class="container divider-bottom {{ $containerClass ?? '' }}">
        <div class="actions pad-t-0i">
            {{-- Logo --}}
            <a class="action header-logo" style="margin-top:5px;" href="{{ route('about.index') }}">
                <x-header-logo />
            </a>          

            {{-- Upper right user nav --}}
            <div class="nav-right">
                @if(trans()->has('navigation.return_to'))
                    <a id="returnToSite" href="{{ trans('navigation.return_to.url') }}" class="btn btn-secondary btn-size-more-wide btn-size-less-tall">
                        {{ trans('navigation.return_to.text') }}
                    </a>
                @endif
                
                <div class="account-actions">
                    @auth
                        <span class="user-name">Welcome {{ auth()->user()->title }} {{ auth()->user()->fullName }}</span>
                        <div class="account-actions-controls">
                            @if(auth()->user()->is_admin)
                                <span class="hide-s">
                                    <a href="{{ url(config('nova.path')) }}" class="btn btn-link btn-size-less-tall" target="_blank">
                                        {{ trans('navigation.admin') }}
                                    </a>
                                    <span>|</span>
                                </span>
                                
                                <span class="hide-s">
                                    <a href="{{ route('dashboard.index') }}" class="btn btn-link btn-size-less-tall">
                                        {{ trans('navigation.dashboard') }}
                                    </a>
                                    <span>|</span>
                                </span>
                            @endif
                            @can('feature-flags.congresses') {{-- Using congresses so that I can hide account logon/edit for Scleroderma Forum coming soon page --}}
                                <a class="btn btn-link btn-size-less-tall" href="{{ route('account.edit') }}" id="account" @testhook('nav-account')>{{ trans('navigation.account') }}</a>
                                <span>|</span>
                            @endcan
                            {{-- this is per laravel example but seems odd --}}
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                            <a class="btn btn-link btn-size-less-tall" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ trans('navigation.sign_out') }}</a>
                        </div>
                    @else
                        <div class="pad-v-s">
                            @can('feature-flags.congresses') {{-- Using congresses so that I can hide account Sign In button for Scleroderma Forum coming soon page --}}
                                <a class="btn btn-secondary" href="{{ route('login') }}">Sign in</a> &nbsp;
                            @endcan
                            
                            @if(env('MIX_BRAND') !=="vgsp")
                                <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                            @endif
                        </div>
                    @endauth
                </div>

                {{-- Search bar --}}
                @if(env('DISPLAY_SEARCHBAR'))
                    @if(env('MIX_BRAND') == 'vgsp' && Auth::check())
                        <form method="GET" action="{{ route('globalsearch.index') }}" role="search">             
                            <div class="globalsearch" style="margin-bottom:15px;">
                                <input type="text"
                                    class="globalsearchTerm"
                                    placeholder="Search..."  
                                    id="gterm"
                                    name="gterm"
                                    value="{{ $gterm ?? '' }}">
                                <button type="submit" class="globalsearchButton" style="text-align:left;">
                                    <img src="{{ asset('images/search_white.png') }}" 
                                    alt="{{ trans('globalsearch.globalsearch') }}"
                                    title="{{ trans('globalsearch.globalsearch') }}"
                                    width="25" height="25" />
                                </button>                        
                            </div>
                        </form>

                        <form method="GET" action="{{ route('globalsearch.index') }}" role="search">             
                            <div class="globalsearch-below" style="margin-bottom:15px;">
                                <input type="text"
                                    class="globalsearchTerm"
                                    placeholder="Search..."  
                                    id="gterm"
                                    name="gterm"
                                    value="{{ $gterm ?? '' }}">
                                <button type="submit" class="globalsearchButton" style="text-align:left;">
                                    <img src="{{ asset('images/search_white.png') }}" 
                                    alt="{{ trans('globalsearch.globalsearch') }}"
                                    title="{{ trans('globalsearch.globalsearch') }}"
                                    width="25" height="25" />
                                </button>                        
                            </div>                    
                        </form>
                    @endif

                    @if(env('MIX_BRAND') !== 'vgsp')
                        <form method="GET" action="{{ route('globalsearch.index') }}" role="search">             
                            <div class="globalsearch" style="margin-bottom:15px;">
                                <input type="text"
                                    class="globalsearchTerm"
                                    placeholder="Search..."  
                                    id="gterm"
                                    name="gterm"
                                    value="{{ $gterm ?? '' }}">
                                <button type="submit" class="globalsearchButton" style="text-align:left;">
                                    <img src="{{ asset('images/search_white.png') }}" 
                                    alt="{{ trans('globalsearch.globalsearch') }}"
                                    title="{{ trans('globalsearch.globalsearch') }}"
                                    width="25" height="25" />
                                </button>                        
                            </div>
                        </form>

                        <form method="GET" action="{{ route('globalsearch.index') }}" role="search">             
                            <div class="globalsearch-below" style="margin-bottom:15px;">
                                <input type="text"
                                    class="globalsearchTerm"
                                    placeholder="Search..."  
                                    id="gterm"
                                    name="gterm"
                                    value="{{ $gterm ?? '' }}">
                                <button type="submit" class="globalsearchButton" style="text-align:left;">
                                    <img src="{{ asset('images/search_white.png') }}" 
                                    alt="{{ trans('globalsearch.globalsearch') }}"
                                    title="{{ trans('globalsearch.globalsearch') }}"
                                    width="25" height="25" />
                                </button>                        
                            </div>                    
                        </form>
                    @endif                        
                @endif
            </div>
        </div>

        {{-- Main nav (See NavigationComposer + feature-flags.php) --}}
        <x-page-header :links="$navigationLinks" />

        {{-- from forum hotfixes branch --}}
        {{--
                <nav @testhook('header-nav')>
            <ul>
                <li><a class="btn btn-tertiary {{ request()->routeIs('about.*') ? 'active' : '' }}" href="{{ route('about.index') }}">{{ trans('navigation.about') }}</a></li>
                <li><a class="btn btn-tertiary {{ request()->routeIs(['publications.*', 'literature-reviews.*']) ? 'active' : '' }}" href="{{ route('publications.index') }}">{{ trans('navigation.publications') }}</a></li>
                <li><a class="btn btn-tertiary {{ request()->routeIs('podcasts.*') ? 'active' : '' }}" href="{{ route('podcasts.episodes.index') }}" @testhook('nav-podcasts')>{{ trans('navigation.podcasts') }}</a></li>
                <li><a class="btn btn-tertiary {{ request()->routeIs('congresses.*') ? 'active' : '' }}" href="{{ route('congresses.index') }}">{{ trans('navigation.congresses') }}</a></li>
                @can('feature-flags.courses')
                    <li><a class="btn btn-tertiary {{ request()->routeIs(['courses.*', 'course-module-videos.*', 'course-module-tests.*']) ? 'active' : '' }}" href="{{ route('courses.index') }}">{{ trans('navigation.courses') }}</a></li>
                @endcan
                <li><a class="btn btn-tertiary {{ request()->routeIs('resources.*') ? 'active' : '' }}" href="{{ route('resources.index') }}">{{ trans('navigation.resources') }}</a></li>
                <!--
                <li><a class="btn btn-tertiary {{ request()->routeIs('podcasts.*') ? 'active' : '' }}" href="{{ route('podcasts.episodes.index') }}">{{ trans('navigation.podcasts') }}</a></li>
                <li><a class="btn btn-tertiary {{ request()->routeIs('xyz.*') ? 'active' : '' }}" href="#">COVID-19</a></li>
                Educational videos??
                -->
                @can('viewInNavigation', App\Models\Webinar::class)
                    <li><a class="btn btn-tertiary {{ request()->routeIs('webinars.*') ? 'active' : '' }}" href="{{ route('webinars.index') }}" @testhook('nav-webinars')>{{ trans('navigation.webinars') }}</a></li>
                @endcan
                @can('feature-flags.user-directory')
                    <li><a class="btn btn-tertiary {{ request()->routeIs('user-directory.*') ? 'active' : '' }}" href="{{ route('user-directory.index') }}" @testhook('nav-contact')>Contact</a></li>
                @endcan
                @can('feature-flags.contact')
                    <li><a class="btn btn-tertiary {{ request()->routeIs('contact.*') ? 'active' : '' }}" href="{{ route('contact.index') }}" @testhook('nav-contact')>Contact</a></li>
                @endcan
            </ul>
        </nav>
        --}}
    </div>
</header>
