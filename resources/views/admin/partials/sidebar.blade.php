<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{route('admin.dashboard')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('admin.employee')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                                 Employee
                            </a>

                            @if(auth()->user()->role=='admin')


                            
                            <a class="nav-link" href="{{route('admin.user')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                                Users List
                            </a>
                            
                           
                            <a class="nav-link" href="{{route('admin.assign.employee')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                                Assign_Employee
                            </a>
                            <a class="nav-link" href="{{route('admin.problem.type')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                                Problem Type
                            </a>

                            
                            <a class="nav-link" href="{{route('admin.problems.list')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                                City Corporation Problems
                            </a>
                            <a class="nav-link" href="{{route('admin.user.feedback')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                                User Feedback
                            </a>
                            <a class="nav-link" href="{{route('admin.etask.list')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                                Feedback of Completion Task
                            </a>

                            <a class="nav-link" href="{{route('admin.report.list')}}">
                                <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div>
                               Report 
                            </a>
                            
                            
                            <a class="nav-link" href="#">
                                <!-- <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div> -->
                                
                            </a>
                           
                            <a class="nav-link" href="#">
                                <!-- <div class="sb-nav-link-icon"><i class='fas fa-arrows-alt' style='font-size:24px'></i></div> -->
                                
                            </a>
                           

                            @endif
                           <!-- <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                problem_name

                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>-->
                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>