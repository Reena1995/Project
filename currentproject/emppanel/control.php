<?php
include_once('../mobigo/model.php');
class control extends model
{ 
	function __construct()
	{
		session_start();
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		model::__construct();
		
		switch($path)
		{
			
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password);
				
				$where=array("Username"=>$Username,"Password"=>$enc_pass);
				$res=$this->select_where('employee',$where);
				$ans=$res->num_rows;
				if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$Username=$fetch->Username;
					$Employee_id=$fetch->Employee_id;
					$Image=$fetch->Image;
					
					$_SESSION['employee']=$Username;
					$_SESSION['Employee_id']=$Employee_id;
					$_SESSION['Image']=$Image;
						if(isset($_REQUEST['rem']))
							{
								setcookie('Username',$Username,time()+(24*60*60));
								setcookie('Password',$Password,time()+(24*60*60));
							}
					
					echo "<script>
					alert('Login Success');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login Failed Due To wrong credantial !');
					window.location='index';
					</script>";	
				}
			}
			include_once('index.php');
			break;
			
			case '/logout':
			unset($_SESSION['employee']);
			unset($_SESSION['Employee_id']);
			echo "<script>
					alert('Logout Success');
					window.location='index';
					</script>";
			break;
			
			case '/myprofile':
			$Employee_id=$_SESSION['Employee_id'];
			$where=array("Employee_id"=>$Employee_id);
			$res=$this->select_where('employee',$where);
			$fetch=$res->fetch_object();
			include_once('myprofile.php');
			break;
			
			case '/editprofile':
			if(isset($_REQUEST['btn_Employee_id']))
			{
			$Employee_id=$_REQUEST['btn_Employee_id'];
			$where=array("Employee_id"=>$Employee_id);
			$res=$this->select_where('employee',$where);
			$fetch=$res->fetch_object();
			$old_img=$fetch->Profile_img;
			if(isset($_REQUEST['update']))
			{
				$First_name=$_REQUEST['First_name'];
				$Last_name=$_REQUEST['Last_name'];
				$Username=$_REQUEST['Username'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				$gender=$_REQUEST['gender'];
				date_default_timezone_set("asia/calcutta");
				$updated_dt=date("y-m-d H:i:s");
				
				//img upload
				if($_FILES['Profile_img']['size']>0)
				{
					$Profile_img=$_FILES['Profile_img']['name'];
					$path='../upload/employee/'.$Profile_img;
					$dup_img=$_FILES['Profile_img']['tmp_name'];
					move_uploaded_file($dup_img,$path);
					$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,"Email"=>$Email,"Profile_img"=>$Profile_img,"Mobile_no"=>$Mobile_no,"gender"=>$gender,"Updated_dt"=>$updated_dt);
					$res=$this->update_where('employee',$data,$where);
					if($res)
					{
						unlink('../upload/employee/'.$old_img);
						echo "<script>
						alert('profile update success');
						window.location='myprofile';
						</script>";
					
				}
				}
					else
				{
					$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,"Email"=>$Email,"Profile_img"=>$Profile_img,"Mobile_no"=>$Mobile_no,"gender"=>$gender,"Updated_dt"=>$updated_dt);
					$res=$this->update_where('employee',$data,$where);
					if($res)
					{
						echo "<script>
						alert('profile update success');
						window.location='myprofile';
						</script>";
					}
				
					}

				}
			}
			include_once('editprofile.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			
			case '/add_client':
			
			if(isset($_REQUEST['submit']))
			{
				$client_name=$_REQUEST['client_name'];
				$first_name=$_REQUEST['first_name'];
				$last_name=$_REQUEST['last_name'];
				$email=$_REQUEST['email'];
				$mobile_no=$_REQUEST['mobile_no'];
				$about_shop=$_REQUEST['about_shop'];
				
				//img upload
				$Profile_img=$_FILES['Profile_img']['name'];
				$path='../upload/client/'.$Profile_img;
				$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
				move_uploaded_file($dup_Profile_img,$path);
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("client_name"=>$client_name,"first_name"=>$first_name,"last_name"=>$last_name,
				"email"=>$email,"mobile_no"=>$mobile_no,"about_shop"=>$about_shop,"Profile_img"=>$Profile_img,"created_dt"=>$curent_dt,
				"updated_dt"=>$curent_dt);
				
				$res=$this->insert('client',$data);
				if($res)
				{
					echo "<script>
					alert('client Add Success');
					window.location='add_client';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('add_client.php');
			break;
			
			case '/manage_client':
			$client_arr=$this->select('client');
			include_once('manage_client.php');
			break;
			
			case '/add_brand':
			$brand_id_arr=$this->select('mob_brand');
			if(isset($_REQUEST['submit']))
			{
				$brand_name=$_REQUEST['brand_name'];
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("brand_name"=>$brand_name,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('mob_brand',$data);
				if($res)
				{
					echo "<script>
					alert('mobile brand Add Success');
					window.location='add_brand';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('add_brand.php');
			break;
			
			case '/manage_brand':
			$brand_arr=$this->select('mob_brand');
			include_once('manage_brand.php');
			break;
			
			case '/add_mob_model':
			$brand_id_arr=$this->select('mob_brand');
			if(isset($_REQUEST['submit']))
			{
				$model_name=$_REQUEST['model_name'];
				$brand_id=$_REQUEST['brand_id'];
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("model_name"=>$model_name,"brand_id"=>$brand_id,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('model',$data);
				if($res)
				{
					echo "<script>
					alert('mobile model Add Success');
					window.location='add_mob_model';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('add_mob_model.php');
			break;	
			
			case '/manage_mobile_model':
			$model_arr=$this->select_join2('model','mob_brand','model.brand_id=mob_brand.brand_id');
			include_once('manage_mobile_model.php');
			break;
			
			
			case '/add_user':
			if(isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['name'];
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password);
				$Gender=$_REQUEST['Gender'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				
				//img upload
				$img=$_FILES['img']['name'];
				$path='../upload/users/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
		
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("name"=>$Name,"uname"=>$Username,"pwd"=>$enc_pass,"gender"=>$Gender,
				"EMAIL"=>$Email,"mobile_no"=>$Mobile_no,"img"=>$img,"create_dt"=>$curent_dt,
				"update_dt"=>$curent_dt);
				
				$res=$this->insert('users',$data);
				if($res)
				{
					echo "<script>
					alert('User Add Success');
					window.location='add_emp';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('add_user.php');
			break;
			
			case '/manage_user':
			$user_arr=$this->select('users');
			include_once('manage_user.php');
			break;
			
			case '/add_shop':
			if(isset($_REQUEST['submit']))
			{
				$shop_name=$_REQUEST['shop_name'];
				$address=$_REQUEST['address'];
				$Description=$_REQUEST['Description'];
				$Ownername=$_REQUEST['Ownername'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				
				//img upload
				$img=$_FILES['img']['name'];
				$path='../upload/shop/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
		
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("shop_name"=>$shop_name,"address"=>$address,"Decription"=>$Description,"Ownername"=>$Ownername,
				"email_id"=>$Email,"mob_no"=>$Mobile_no,"img"=>$img,"created_dt"=>$curent_dt,
				"updated_dt"=>$curent_dt);
				
				$res=$this->insert('shop',$data);
				if($res)
				{
					echo "<script>
					alert('shop Add Success');
					window.location='add_emp';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			
			include_once('add_shop.php');
			break;
			
			case '/manage_shop':
			
			$shop_arr=$this->select_join3('shop','location','shop.loc_id=location.loc_id','client','shop.client_id=client.client_id');
			include_once('manage_shop.php');
			break;
			
			case '/add_location':
			if(isset($_REQUEST['submit']))
			{
				$loc_name=$_REQUEST['loc_name'];
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("loc_name"=>$loc_name,"created_dt"=>$curent_dt,
				"updated_dt"=>$curent_dt);
				
				$res=$this->insert('location',$data);
				if($res)
				{
					echo "<script>
					alert('location  Add Success');
					window.location='add_location';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('add_location.php');
			break;
			
			case '/manage_location':
			$location_arr=$this->select('location');
			include_once('manage_location.php');
			break;
			
			case '/editlocation':
			if(isset($_REQUEST['btn_loc_id']))
			{
			$loc_id=$_REQUEST['btn_loc_id'];
			$where=array("loc_id"=>$loc_id);
			$res=$this->select_where('location',$where);
			$fetch=$res->fetch_object();
			if(isset($_REQUEST['update']))
			{
				$loc_name=$_REQUEST['loc_name'];
				date_default_timezone_set("asia/calcutta");
				$updated_dt=date("y-m-d H:i:s");
				
				//img upload
					$data=array("loc_name"=>$loc_name,"Updated_dt"=>$updated_dt);
					$res=$this->update_where('location',$data,$where);
					if($res)
					{
						echo "<script>
						alert('location update success');
						window.location='manage_location';
						</script>";
					}
					else
					{
						echo "<script>
						alert ('location cant updated');
						window.location='manage_location';
						</script>";
					}

				}
			}
			include_once('editlocation.php');
			break;
			
			case '/edit_brand':
			if(isset($_REQUEST['btn_brand_id']))
			{
				$brand_id=$_REQUEST['btn_brand_id'];
				$where=array("brand_id"=>$brand_id);
				$res=$this->select_where('mob_brand',$where);
				$fetch=$res->fetch_object();
				
				if(isset($_REQUEST['update']))
				{
					$brand_name=$_REQUEST['brand_name'];
					
					date_default_timezone_set("asia/calcutta");
					$updated_dt=date("Y-m-d H:i:s");
					$data=array("brand_name"=>$brand_name,"updated_dt"=>$updated_dt);
					$res=$this->update_where('mob_brand',$data,$where);
					if($res)
					{
						echo "<script>
						alert('brand updated successfully');
						window.location='manage_brand';
						</script>";
					}
				}
			}
			include_once('edit_brand.php');
			break;
			
			case '/edit_mob_model':
			$brand_id_arr=$this->select('mob_brand');
			if(isset($_REQUEST['btn_model_id']))
			{
				$model_id=$_REQUEST['btn_model_id'];
				$where=array("model_id"=>$model_id);
				$res=$this->select_where('model',$where);
				$fetch=$res->fetch_object();
				
				if(isset($_REQUEST['update']))
				{
					$brand_id=$_REQUEST['brand_id'];
					$model_name=$_REQUEST['model_name'];
					date_default_timezone_set("asia/calcutta");
					$updated_dt=date("Y-m-d H:i:s");
					$data=array("model_name"=>$model_name,"brand_id"=>$brand_id,"updated_dt"=>$updated_dt);
					$res=$this->update_where('model',$data,$where);
					if($res)
					{
						echo "<script>
						alert('model updated successfully');
						window.location='manage_mobile_model';
						</script>";
					}
				}
			}
			include_once('edit_mob_model.php');
			break;

			case '/edit_client':
			if(isset($_REQUEST['btn_client_id']))
			{
				$client_id=$_REQUEST['btn_client_id'];
				$where=array("client_id"=>$client_id);
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				if(isset($_REQUEST['update']))
				{
					$username=$_REQUEST['username'];
					$password=$_REQUEST['password'];
					$enc_pass=md5($password);
					
					date_default_timezone_set("asia/calcutta");
					$updated_dt=date("Y-m-d H:i:s");
					
					$data=array("username"=>$username,"password"=>$enc_pass,"updated_dt"=>$updated_dt);
					$res=$this->update_where('client',$data,$where);
					if($res)
					{
						echo "<script>
						alert('client password and username updated');
						window.location='manage_client';
						</script>";
					}
				}
			}
			include_once('edit_client.php');
			break;
		
		case '/edit_review':
			if(isset($_REQUEST['btn_review_id']))
			{
				$review_id=$_REQUEST['btn_review_id'];
				$where=array("review_id"=>$review_id);
				$res=$this->select_where('reviews',$where);
				$fetch=$res->fetch_object();
				if(isset($_REQUEST['update']))
				{
					$reply=$_REQUEST['reply'];
					
					date_default_timezone_set("asia/calcutta");
					$updated_dt=date("Y-m-d H:i:s");
					
					$data=array("reply"=>$reply,"updated_dt"=>$updated_dt);
					$res=$this->update_where('reviews',$data,$where);
					if($res)
					{
						echo "<script>
						alert('review reply done');
						window.location='manage_reviews';
						</script>";
					}
				}
			}
			include_once('edit_review.php');
			break;
		
			case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;
		
			case '/manage_reviews':
			$reviews_arr=$this->select_join2('reviews','users','reviews.u_id=users.u_id');
			include_once('manage_reviews.php');
			break;
				
			case '/manage_complaint':
			$complaint_arr=$this->select_join4('complaint','location','complaint.loc_id=location.loc_id','users','complaint.u_id=users.u_id','mob_brand','complaint.brand_id=mob_brand.brand_id','model','complaint.model_id=model.model_id','rep_type','complaint.rep_id=rep_type.rep_id');
			include_once('manage_complaint.php');
			break;
			
			case '/status':
			if(isset($_REQUEST['status_u_id']))
			{
				$u_id=$_REQUEST['status_u_id'];
				$where=array("u_id"=>$u_id);
				$res=$this->select_where('users',$where);
				$fetch=$res->fetch_object();
				$status=$fetch->status;
				if($status=="BLOCK")
				{
					$data=array("status"=>"UNBLOCK");
					$res1=$this->update_where('users',$data,$where);
					{
						echo"<script>
						alert('user unblock successfully');
						window.location='manage_user';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"BLOCK");
					$res1=$this->update_where('users',$data,$where);
					{
						echo"<script>
						alert('user block successfully');
						window.location='manage_user';
						</script>";
					}
				}
			}
			if(isset($_REQUEST['status_client_id']))
			{
				$client_id=$_REQUEST['status_client_id'];
				$where=array("client_id"=>$client_id);
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				$status=$fetch->status;
				if($status=="Unverified")
				{
					$data=array("status"=>"Verified");
					$res1=$this->update_where('client',$data,$where);
					{
						echo"<script>
						alert('client verified successfully');
						window.location='manage_client';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"Unverified");
					$res1=$this->update_where('client',$data,$where);
					{
						echo"<script>
						alert('client Unverified successfully');
						window.location='manage_client';
						</script>";
					}
				}
			}
			if(isset($_REQUEST['status_shop_id']))
			{
				$shop_id=$_REQUEST['status_shop_id'];
				$where=array("shop_id"=>$shop_id);
				$res=$this->select_where('shop',$where);
				$fetch=$res->fetch_object();
				$status=$fetch->status;
				if($status=="Unverified")
				{
					$data=array("status"=>"Verified");
					$res1=$this->update_where('shop',$data,$where);
					{
						echo"<script>
						alert('client verified successfully');
						window.location='manage_shop';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"Unverified");
					$res1=$this->update_where('shop',$data,$where);
					{
						echo"<script>
						alert('client Unverified successfully');
						window.location='manage_shop';
						</script>";
					}
				}
			}
			
			case '/delete':
			if(isset($_REQUEST['del_Employee_id']))
			{
				$Employee_id=$_REQUEST['del_Employee_id'];
				$where=array("Employee_id"=>$Employee_id);
				
				$res=$this->select_where('employee',$where);
				$fetch=$res->fetch_object();
				$Profile_img=$fetch->Profile_img;
				
				$res=$this->delete_where('employee',$where);
				if($res)
				{   
			       unlink('upload/employee/'.$Profile_img);
					echo "<script>
					alert('employee Delete Success');
					window.location='manage_emp';
					</script>";
				}
			}
			if(isset($_REQUEST['del_review_id']))
			{
				$review_id=$_REQUEST['del_review_id'];
				$where=array("review_id"=>$review_id);
				$res=$this->delete_where('reviews',$where);
				if($res)
				{
					echo "<script>
					alert('review Delete Success');
					window.location='manage_reviews';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_u_id']))
			{
				$u_id=$_REQUEST['del_u_id'];
				$where=array("u_id"=>$u_id);
				
				$res=$this->select_where('users',$where);
				$fetch=$res->fetch_object();
				$Img=$fetch->Img;
				
				$res=$this->delete_where('users',$where);
				if($res)
				{
					unlink('../upload/users/'.$Img);
					echo "<script>
					alert('user Delete Success');
					window.location='manage_user';
					</script>";
				}
			}	
			
			if(isset($_REQUEST['del_client_id']))
			{
				$client_id=$_REQUEST['del_client_id'];
				$where=array("client_id"=>$client_id);
				
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				$Profile_img=$fetch->Profile_img;
				
				$res=$this->delete_where('client',$where);
				if($res)
				{
					unlink('../upload/client/'.$Profile_img);
					echo "<script>
					alert('client Delete Success');
					window.location='manage_client';
					</script>";
				}
			}	
			
			if(isset($_REQUEST['del_shop_id']))
			{
				$shop_id=$_REQUEST['del_shop_id'];
				$where=array("shop_id"=>$shop_id);
				
				$res=$this->select_where('shop',$where);
				$fetch=$res->fetch_object();
				$img=$fetch->img;
				
				$res=$this->delete_where('shop',$where);
				if($res)
				{
					unlink('../upload/shop/'.$img);
					echo "<script>
					alert('user Delete Success');
					window.location='manage_shop';
					</script>";
				}
			}

			if(isset($_REQUEST['del_brand_id']))
			{
				$brand_id=$_REQUEST['del_brand_id'];
				$where=array("brand_id"=>$brand_id);
				$res=$this->delete_where('mob_brand',$where);
				if($res)
				{
					echo "<script>
					alert('contact Delete Success');
					window.location='manage_brand';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_loc_id']))
			{
				$loc_id=$_REQUEST['del_loc_id'];
				$where=array("loc_id"=>$loc_id);
				$res=$this->delete_where('location',$where);
				if($res)
				{
					echo "<script>
					alert('location delete successfully');
					window.location='manage_location';
					</script>";
				}
			}
			if(isset($_REQUEST['del_Caradv_id']))
			{
				$Caradv_id=$_REQUEST['del_Caradv_id'];
				$where=array("Caradv_id"=>$Caradv_id);
				
				$res=$this->select_where('caradv',$where);
				$fetch=$res->fetch_object();
				$Car_img=$fetch->Car_img;
				
				$res=$this->delete_where('caradv',$where);
				if($res)
				{  
			        unlink('upload/caradv/'.$Car_img);
					echo "<script>
					alert('car adv Delete Success');
					window.location='manage_car';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Cartype_id']))
			{
				$Cartype_id=$_REQUEST['del_Cartype_id'];
				$where=array("Cartype_id"=>$Cartype_id);
				
				$res=$this->select_where('car_type',$where);
				$fetch=$res->fetch_object();
				$Car_img=$fetch->Car_img;
				
				$res=$this->delete_where('car_type',$where);
				if($res)
				{   
			        unlink('upload/cartype/'.$Car_img);
					echo "<script>
					alert('car type Delete Success');
					window.location='manage_car_type';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Client_id']))
			{
				$Client_id=$_REQUEST['del_Client_id'];
				$where=array("Client_id"=>$Client_id);
				
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				$Profile_img=$fetch->Profile_img;
				
				$res=$this->delete_where('client',$where);
				if($res)
				{   
			        unlink('upload/client/'.$Profile_img);
					echo "<script>
					alert('client Delete Success');
					window.location='manage_client';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Customer_id']))
			{
				$Customer_id=$_REQUEST['del_Customer_id'];
				$where=array("Customer_id"=>$Customer_id);
				
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				$Profile_img=$fetch->Profile_img;
				
				$res=$this->delete_where('customer',$where);
				if($res)
				{
					unlink('upload/customer/'.$Profile_img);
					echo "<script>
					alert('customer Delete Success');
					window.location='manage_customer';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_model_id']))
			{
				$model_id=$_REQUEST['del_model_id'];
				$where=array("model_id"=>$model_id);
				$res=$this->delete_where('model',$where);
				if($res)
				{
					echo "<script>
					alert('contact Delete Success');
					window.location='manage_mobile_model';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Feedback_id']))
			{
				$Feedback_id=$_REQUEST['del_Feedback_id'];
				$where=array("Feedback_id"=>$Feedback_id);
				$res=$this->delete_where('feedback',$where);
				if($res)
				{
					echo "<script>
					alert('feedback Delete Success');
					window.location='booking_reviews';
					</script>";
				}
			}
			break;
			
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}

$obj=new control;

?>