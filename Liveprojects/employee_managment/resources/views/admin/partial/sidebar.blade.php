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
                                <i class="icon-placeholder mdi  mdi-account-group"></i>
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
                                <i class="icon-placeholder mdi mdi-account-check"></i>
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
                                    Location
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder  fa fa-map-marker"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('company_location.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Location</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('company_location.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Location</span>
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
                                    Location Type
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder  mdi mdi-account-network"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('company_location_type.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Location Type</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('company_location_type.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Location Type</span>
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
                                    Medium 
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fa fa-book"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('medium_instruction.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Medium </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('medium_instruction.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Medium </span>
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
                                <i class="icon-placeholder fa fa-language"></i>

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

                     <!--list item Education Level module  begins-->
                     <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Education Level
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fa fa-graduation-cap"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('education_level.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Education Level</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder fa fa-graduation-cap"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('education_level.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View   Education Level</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item Education Level  module ends-->

                     <!--list item Document Type module  begins-->
                     <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Document Type
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fa fa-file-pdf-o"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('document_type.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Document Type</span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('document_type.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Document Type</span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item Document Type  module ends-->

                    <!--list item Asset Brand module  begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                         Asset Brand 
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-crown"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('asset_brand.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Asset Brand </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('asset_brand.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Asset Brand </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item Asset Brand  module ends-->

                     <!--list item Asset Type module  begins-->
                     <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                         Asset Type 
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-responsive"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('asset_type.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Asset Type </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('asset_type.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Asset Type </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item Asset Type  module ends-->

                    <!--list item    Asset Sub Type  module  begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                         Asset Sub Type 
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fa fa-keyboard-o"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('asset_sub_type.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Asset Sub Type </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-account-plus"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('asset_sub_type.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Asset Sub Type </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item    Asset Sub Type   module ends-->

                    <!--list item    Current Residence Type  module  begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Residence Type 
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fa fa-home"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('current_residence_type.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Residence Type </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder fa fa-home"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('current_residence_type.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Residence Type </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item    current Residence Type   module ends-->

                    <!--list item    mode Of Transportation  module  begins-->
                    <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Transportation 
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder fa fa-taxi"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('mode_of_transportation.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Transportation </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder fa fa-taxi"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('mode_of_transportation.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Transportation </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item    mode Of Transportation   module ends-->

                     <!--list item    Leave Type  module  begins-->
                     <li class="menu-item">
                        <a href="#" class="open-dropdown menu-link">
                            <span class="menu-label">
                                <span class="menu-name">
                                    Leave Type
                                    <span class="menu-arrow"></span>
                                </span>
                            </span>
                            <span class="menu-icon">
                                <i class="icon-placeholder mdi mdi-calendar"></i>
                            </span>
                        </a>
                        <!--submenu-->
                        <ul class="sub-menu">
                            <li class="menu-item">
                                    <a href="{{route('leave_type.create')}}"   class="menu-link">
                                        <span class="menu-label">
                                            <span class="menu-name">Add Leave Type </span>
                                        </span>
                                        <span class="menu-icon">
                                            <i class="icon-placeholder mdi mdi-calendar-text"></i>
                                        </span>
                                    </a>
                            </li>
                            
                            <li class="menu-item">
                                <a href="{{route('leave_type.index')}}" class="menu-link">
                                    <span class="menu-label">
                                        <span class="menu-name">View Leave Type </span>
                                    </span>
                                    <span class="menu-icon">
                                        <i class="icon-placeholder mdi mdi-eye-outline"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--list item    Leave Type   module ends-->

                    

                </ul>
                <!-- Menu List Ends-->
            </div>
        </aside>