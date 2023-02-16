 <aside class="admin-sidebar">
            <div class="admin-sidebar-brand">
                <!-- begin sidebar branding-->
                <img class="admin-brand-logo" src="{{asset('console/assets/img/logo.svg')}}" width="40" alt="hci Logo" />
                <span class="admin-brand-content"><a href="index.html"> hci</a></span>
                <!-- end sidebar branding-->
                <div class="ml-auto">
                    <!-- sidebar pin-->
                    <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
                    <!-- sidebar close for mobile device-->
                    <a href="#" class="admin-close-sidebar"></a>
                </div>
            </div>
            <div class="admin-sidebar-wrapper js-scrollbar">
                <!-- Menu List Begins-->
                <ul class="menu">
                    <!--list item begins-->
                    <li class="menu-item active">
                        <a href="{{route('admin.dashboard')}}" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">Dashboard </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-view-dashboard"></i>
                            </span>
                        </a>
                    </li>
                    <!--list item ends-->

                   
                     <!--list item department  module  begins-->
                     <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Department
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('department.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Department</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('department.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Department</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>

                           
                            
                        </ul>
                    </li>
                    <!--list item department  module ends-->
                    
                    <!--list item designation  module  begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                Designation
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('designation.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Designation</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('designation.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Designation</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>

                           
                            
                        </ul>
                    </li>
                    <!--list item designation  module ends-->

                    <!--list item Role organization  module  begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Organization Role
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('organization_role.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Organization Role</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('organization_role.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Organization Role</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item Role organization  module ends-->

                    <!--list item company location module  begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Company Location
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('company_location.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Company Location</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('company_location.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View  Company Location</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item company location  module ends-->

                      <!--list item company location Type module  begins-->
                      <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Company Location Type
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('company_location_type.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Company Location Type</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('company_location_type.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View  Company Location Type</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item company location Type  module ends-->
                    
                     <!--list item medium of instruction module  begins-->
                     <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Medium Of Instruction
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('medium_instruction.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Medium Of Instruction</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('medium_instruction.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View   Medium Of Instruction</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item  medium of instruction  module ends-->

                    
                     <!--list item Language module  begins-->
                     <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Language
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('language.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Language</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('language.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View   Language</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item  Language  module ends-->

                    <!--list item begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Attendance
                                    <span class="menu-arrow"></span>
                                </span>
                                <!-- <span class="menu-info">Contains submenu</span> -->
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-calendar"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="attendance-list.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Attendance List</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-calendar-text"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="attendance-list.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">
                                            Attendance By User
                                        </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-account-box-outline"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="attendance-view.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">
                                            Attendance View
                                        </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-calendar-check"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item ends-->

                    <!--list item begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Leave
                                    <span class="menu-arrow"></span>
                                </span>
                                <!-- <span class="menu-info">Contains submenu</span> -->
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-calendar"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="leave-settings.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">Leave Setting</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-calendar-text"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="leave-applications.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">
                                            Leave Applications
                                        </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-account-box-outline"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="recent-reave-applications.html" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">
                                            Recent Leaves
                                        </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-calendar-check"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item ends-->

                    <!--list item begins-->
                    <li class="menu-item">
                        <a href="list-holidays.html" class="menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Holidays
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-account"></i>
                            </span>
                        </a>
                    </li>
                    <!--list item ends-->

                </ul>
                <!-- Menu List Ends-->
            </div>
        </aside>