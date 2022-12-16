							
							<?php
							function active1($currect_page){
							  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
							  $url = end($url_array);  
							  if($currect_page == $url){
								  echo 'active'; //class name in css 
							  } 
							}
							?>
							
							<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="{{url('upload/doctor/'. Session('drprofile_img'))}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr.{{Session('drname')}}</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">{{Session('drtitle')}}</h5>
											</div>
										</div>
									</div>
								</div>
							<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="<?php active1('doctor-company-dashboard')?>">
												<a href="{{url('/doctor-company-dashboard')}}">
													<i class="fas fa-columns"></i>
													<span> Dashboard</span>
												</a>
											</li>
											<li class="<?php active1('doctor-visitor_request')?>">
												<a href="{{url('/doctor-visitor_request')}}">
													<i class="fas fa-calendar-check"></i>
													<span>All Requests</span>
												</a>
											</li>
											<li class="<?php active1('doctor-mr-appointments')?>">
												<a href="{{url('/doctor-mr-appointments')}}">
													<i class="fas fa-calendar-check"></i>
													<span>MR Appointments</span>
												</a>
											</li>
											<li class="<?php active1('doctor-manager-appointments')?>">
												<a href="{{url('/doctor-manager-appointments')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Manager Appointments</span>
												</a>
											</li>
											<li class="<?php active1('doctor-company-appointments')?>">
												<a href="{{url('/doctor-company-appointments')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Company Appointments</span>
												</a>
											</li>

											<li class="<?php active1('doctor-visitor_timings')?>">
												<a href="{{url('/doctor-visitor_timings')}}">
													<i class="fas fa-hourglass-start"></i>
													<span>Visitor Schedule</span>
												</a>
											</li>
											
											<li class="<?php active1('doctor-pharma-find')?>">
												<a href="{{url('/doctor-pharma-find')}}">
													<i class="fas fa-user"></i>
													<span>Pharma Persons</span>
												</a>
											</li>

											<li class="<?php active1('doctor-stockiest-find')?>">
												<a href="{{url('/doctor-stockiest-find')}}">
													<i class="fas fa-user"></i>
													<span>Find Stockiest</span>
												</a>
											</li>
											
											
										</ul>
									</nav>
								</div>