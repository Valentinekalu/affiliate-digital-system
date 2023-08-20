<?php
ob_start(); // Start output buffering
?>
        <aside class="top-navbar navbar fixed-navbar navbar-vertical navbar-expand-sm navbar-dark" data-bs-theme="dark">
          <div class="container-fluid top-bar">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <h1 class="navbar-brand navbar-brand-autodark">
                <a href=".">
                  <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                </a>
              </h1>
              <div class="navbar-nav flex-row d-lg-none">
                <div class="nav-item d-none d-lg-flex me-3">
                  <div class="btn-list">
                    <a href="https://github.com/tabler/tabler" class="btn" target="_blank" rel="noreferrer">
                      <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                      Source code
                    </a>
                    <a href="https://github.com/sponsors/codecalm" class="btn" target="_blank" rel="noreferrer">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </div>
                </div>
                <div class="d-lg-flex">
                  <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
               data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                  </a>
                  <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
               data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                  </a>
                </div>
               <div class="user-drop">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                      <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                      <div class="d-none d-xl-block ps-2">
                        <div>Paweł Kuna</div>
                        <div class="mt-1 small text-muted">UI Designer</div>
                      </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <a href="#" class="dropdown-item">Status</a>
                      <a href="./profile.html" class="dropdown-item">Profile</a>
                      <a href="#" class="dropdown-item">Feedback</a>
                      <div class="dropdown-divider"></div>
                      <a href="./settings.html" class="dropdown-item">Settings</a>
                      <a href="./sign-in.html" class="dropdown-item">Logout</a>
                    </div>
                  </div>
               </div>
              </div>
            
          </div>
          <div class="sidebar">
            <button class="toggle-button d-none">Toggle Sidebar</button>
            <!-- Sidebar content goes here -->
            <div class="collapse navbar-collapse" id="sidebar-menu">
                <ul class="navbar-nav pt-lg-3">
                    <li class="nav-item dropdown">
                        <div class="side-user">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                                  <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                                  <div class=" d-xl-block ps-2">
                                    <div>Paweł Kuna</div>
                                    <div class="mt-1 small text-muted">UI Designer</div>
                                  </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <a href="?theme=dark" class="dropdown-item hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"> Dark Mood 
                                         <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                                         <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                                       </a>
                                       <a href="?theme=light" class="dropdown-item hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
                                       data-bs-placement="bottom"> Light Mood
                                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                                          </a>
                                  <a href="#" class="dropdown-item">Status</a>
                                  <a href="./profile.html" class="dropdown-item">Profile</a>
                                  <a href="#" class="dropdown-item">Feedback</a>
                                  <div class="dropdown-divider"></div>
                                  <a href="./settings.html" class="dropdown-item">Settings</a>
                                  <a href="./sign-in.html" class="dropdown-item">Logout</a>
                                </div>
                              </div>
                        </div>
                    </li>
                    <li class="nav-item first-nav-item">
                        <a class="nav-link" href="./" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Home
                        </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Interface
                        </span>
                        </a>
                        <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./accordion.html">
                                Accordion
                            </a>
                            <a class="dropdown-item" href="./blank.html">
                                Blank page
                            </a>
                            <a class="dropdown-item" href="./badges.html">
                                Badges
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./buttons.html">
                                Buttons
                            </a>
                            <div class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                                Cards
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <div class="dropdown-menu">
                                <a href="./cards.html" class="dropdown-item">
                                    Sample cards
                                </a>
                                <a href="./card-actions.html" class="dropdown-item">
                                    Card actions
                                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a href="./cards-masonry.html" class="dropdown-item">
                                    Cards Masonry
                                </a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="./colors.html">
                                Colors
                            </a>
                            <a class="dropdown-item" href="./datagrid.html">
                                Data grid
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./datatables.html">
                                Datatables
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./dropdowns.html">
                                Dropdowns
                            </a>
                            <a class="dropdown-item" href="./modals.html">
                                Modals
                            </a>
                            <a class="dropdown-item" href="./maps.html">
                                Maps
                            </a>
                            <a class="dropdown-item" href="./map-fullsize.html">
                                Map fullsize
                            </a>
                            <a class="dropdown-item" href="./maps-vector.html">
                                Vector maps
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./navigation.html">
                                Navigation
                            </a>
                            <a class="dropdown-item" href="./charts.html">
                                Charts
                            </a>
                            <a class="dropdown-item" href="./pagination.html">
                                <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                Pagination
                            </a>
                            </div>
                            <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./placeholder.html">
                                Placeholder
                            </a>
                            <a class="dropdown-item" href="./steps.html">
                                Steps
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./stars-rating.html">
                                Stars rating
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./tabs.html">
                                Tabs
                            </a>
                            <a class="dropdown-item" href="./tables.html">
                                Tables
                            </a>
                            <a class="dropdown-item" href="./carousel.html">
                                Carousel
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./lists.html">
                                Lists
                            </a>
                            <a class="dropdown-item" href="./typography.html">
                                Typography
                            </a>
                            <a class="dropdown-item" href="./offcanvas.html">
                                Offcanvas
                            </a>
                            <a class="dropdown-item" href="./markdown.html">
                                Markdown
                            </a>
                            <a class="dropdown-item" href="./dropzone.html">
                                Dropzone
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./lightbox.html">
                                Lightbox
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./tinymce.html">
                                TinyMCE
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./inline-player.html">
                                Inline player
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <div class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                                Authentication
                                </a>
                                <div class="dropdown-menu">
                                <a href="./sign-in.html" class="dropdown-item">
                                    Sign in
                                </a>
                                <a href="./sign-in-link.html" class="dropdown-item">
                                    Sign in link
                                </a>
                                <a href="./sign-in-illustration.html" class="dropdown-item">
                                    Sign in with illustration
                                </a>
                                <a href="./sign-in-cover.html" class="dropdown-item">
                                    Sign in with cover
                                </a>
                                <a href="./sign-up.html" class="dropdown-item">
                                    Sign up
                                </a>
                                <a href="./forgot-password.html" class="dropdown-item">
                                    Forgot password
                                </a>
                                <a href="./terms-of-service.html" class="dropdown-item">
                                    Terms of service
                                </a>
                                <a href="./auth-lock.html" class="dropdown-item">
                                    Lock screen
                                </a>
                                </div>
                            </div>
                            <div class="dropend">
                                <a class="dropdown-item dropdown-toggle" href="#sidebar-error" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                                <!-- Download SVG icon from http://tabler-icons.io/i/file-minus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><path d="M9 14l6 0" /></svg>
                                Error pages
                                </a>
                                <div class="dropdown-menu">
                                <a href="./error-404.html" class="dropdown-item">
                                    404 page
                                </a>
                                <a href="./error-500.html" class="dropdown-item">
                                    500 page
                                </a>
                                <a href="./error-maintenance.html" class="dropdown-item">
                                    Maintenance page
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./form-elements.html" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l3 3l8 -8" /><path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Forms
                        </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Extra
                        </span>
                        </a>
                        <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./empty.html">
                                Empty page
                            </a>
                            <a class="dropdown-item" href="./cookie-banner.html">
                                Cookie banner
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./activity.html">
                                Activity
                            </a>
                            <a class="dropdown-item" href="./gallery.html">
                                Gallery
                            </a>
                            <a class="dropdown-item" href="./invoice.html">
                                Invoice
                            </a>
                            <a class="dropdown-item" href="./search-results.html">
                                Search results
                            </a>
                            <a class="dropdown-item" href="./pricing.html">
                                Pricing cards
                            </a>
                            <a class="dropdown-item" href="./pricing-table.html">
                                Pricing table
                            </a>
                            <a class="dropdown-item" href="./faq.html">
                                FAQ
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./users.html">
                                Users
                            </a>
                            <a class="dropdown-item" href="./license.html">
                                License
                            </a>
                            </div>
                            <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./logs.html">
                                Logs
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./music.html">
                                Music
                            </a>
                            <a class="dropdown-item" href="./photogrid.html">
                                Photogrid
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./tasks.html">
                                Tasks
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./uptime.html">
                                Uptime monitor
                            </a>
                            <a class="dropdown-item" href="./widgets.html">
                                Widgets
                            </a>
                            <a class="dropdown-item" href="./wizard.html">
                                Wizard
                            </a>
                            <a class="dropdown-item" href="./settings.html">
                                Settings
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./trial-ended.html">
                                Trial ended
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./job-listing.html">
                                Job listing
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./page-loader.html">
                                Page loader
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            </div>
                        </div>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="true" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M4 13m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 4m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Layout
                        </span>
                        </a>
                        <div class="dropdown-menu show">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./layout-horizontal.html">
                                Horizontal
                            </a>
                            <a class="dropdown-item" href="./layout-boxed.html">
                                Boxed
                                <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                            </a>
                            <a class="dropdown-item" href="./layout-vertical.html">
                                Vertical
                            </a>
                            <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                Vertical transparent
                            </a>
                            <a class="dropdown-item" href="./layout-vertical-right.html">
                                Right vertical
                            </a>
                            <a class="dropdown-item" href="./layout-condensed.html">
                                Condensed
                            </a>
                            <a class="dropdown-item active" href="./layout-combo.html">
                                Combined
                            </a>
                            </div>
                            <div class="dropdown-menu-column">
                            <a class="dropdown-item" href="./layout-navbar-dark.html">
                                Navbar dark
                            </a>
                            <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                Navbar sticky
                            </a>
                            <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                Navbar overlap
                            </a>
                            <a class="dropdown-item" href="./layout-rtl.html">
                                RTL mode
                            </a>
                            <a class="dropdown-item" href="./layout-fluid.html">
                                Fluid
                            </a>
                            <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                Fluid vertical
                            </a>
                            </div>
                        </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./icons.html" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/ghost -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" /><path d="M10 10l.01 0" /><path d="M14 10l.01 0" /><path d="M10 14a3.5 3.5 0 0 0 4 0" /></svg>
                        </span>
                        <span class="nav-link-title">
                            4158 icons
                        </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false" >
                        <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M15 15l3.35 3.35" /><path d="M9 15l-3.35 3.35" /><path d="M5.65 5.65l3.35 3.35" /><path d="M18.35 5.65l-3.35 3.35" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Help
                        </span>
                        </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                            Documentation
                        </a>
                        <a class="dropdown-item" href="./changelog.html">
                            Changelog
                        </a>
                        <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
                            Source code
                        </a>
                        <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            Sponsor project!
                        </a>
                        </div>
                    </li>
                    </ul>
              </div>
          </div>
        </aside>

        <?php
$sidebar = ob_get_clean(); // Capture the output and clean the buffer

// Include the layout file
require 'layouts/layout.php';
?>