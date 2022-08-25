@extends('Backend.Admin.Layout.mainlayout')
@section('remaining_content')
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="{{url('edit/'.$fetch->id)}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="{{asset('upload/admin/'.$fetch->img)}}"alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $fetch->name;?></h3>
                                                <small class="text-muted"></small>
                                                <div class="staff-id"></div>
                                                <div class="staff-msg"><a href="chat.html"></a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><?php echo $fetch->mobileno;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><?php echo $fetch->emailid;?></a></span>
                                                </li>
												<li>
                                                    <span class="title">Username</span>
                                                    <span class="text"><?php echo $fetch->username;?></span>
                                                </li>
                                                <li>
                                                    <span class="title"></span>
                                                    <span class="text"></span>
                                                </li>
                                                <li>
                                                    <span class="title"></span>
                                                    <span class="text"></span>
                                                </li>
                                                <li>
                                                    <span class="title"></span>
                                                    <span class="text"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab"></a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab"></a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab"></a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                
                </div>
            </div>
        </div>
    </div>
	@endsection