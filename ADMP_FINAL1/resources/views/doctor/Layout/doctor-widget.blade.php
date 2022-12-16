							<?php
							function active($currect_page){
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
											<li class="<?php active('doctor-dashboard')?>">
												<a href="{{url('/doctor-dashboard')}}">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											
											<li class="<?php active('editdoctor')?>">
												<a href="{{url('/editdoctor')}}">
													<i class="fas fa-user-cog"></i>
													<span>Doctor Profile</span>
												</a>
											</li>

											<li class="<?php active('doctor-service-specialization')?>">
												<a href="{{url('/doctor-service-specialization')}}">
													<i class="fas fa-user-injured"></i>
													<span>Services & Specializations</span>
												</a>
											</li>

											<li class="<?php active('doctor-my-patients')?>">
												<a href="{{url('/doctor-my-patients')}}">
													<i class="fas fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											
											<li class="<?php active('doctor-appointments')?>">
												<a href="{{url('/doctor-appointments')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											
											<li class="<?php active('doctor-patient-schedule-timings')?>">
												<a href="{{url('/doctor-patient-schedule-timings')}}">
													<i class="fas fa-hourglass-start"></i>
													<span>Patient Schedule</span>
												</a>
											</li>
											

											<li class="<?php active('doctor-my-medicine')?>">
												<a href="{{url('/doctor-my-medicine')}}">
													<i class="fas fa-user-injured"></i>
													<span>My Medicine</span>
												</a>
											</li>
											
											
											<li class="<?php active('doctor-change-password')?>">
												<a href="{{url('/doctor-change-password')}}">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li class="<?php active('doctorlogout')?>">
												<a href="{{url('/doctorlogout')}}">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>