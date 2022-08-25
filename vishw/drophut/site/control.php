<?php
include_once('../admin/model.php');
class control extends model
{
	function __construct()
	{	
		session_start();
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		model::__construct(); // step 3
		
		
		
		switch($path)
		{
			case '/index':
				include_once('index.php');
					break;

			case '/faq':
				include_once('faq.php');
					break;

			case '/forget-password':
				include_once('forget-password.php');
					break;

			case '/wishlist':
				include_once('wishlist.php');
					break;

			case '/product-details':
				$adv_arr=$this->select('droneadv');
				include_once('product-details.php');
					break;

					case '/shop-details':
						$shop_arr=$this->select('shopadv');
						include_once('shop-details.php');
							break;
		

			case '/register':
				if(isset($_REQUEST['submit']))
				{
					$Profile_img=$_REQUEST['Profile_img'];
					$Name=$_REQUEST['Name'];
					$Mobile_no=$_REQUEST['Mobile_no'];
					$Email=$_REQUEST['Email'];
					$Gender=$_REQUEST['Gender'];
					$Address=$_REQUEST['Address'];
					$User_name=$_REQUEST['User_name'];
					$Password=$_REQUEST['Password'];
					$enc_Pass=md5($Password);

					//img upload
					$Profile_img=$_FILES['Profile_img']['name'];
					$path='upload/customer/'.$Profile_img;
					$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
					move_uploaded_file($dup_Profile_img,$path);
					
					//current dt
					date_default_timezone_set("asia/calcutta");
					$curent_dt=date("Y-m-d H:i:s");
					
					$data=array("Profile_img"=>$Profile_img,"Name"=>$Name,"Mobile_no"=>$Mobile_no,"Email"=>$Email,"Gender"=>$Gender,"Address"=>$Address,"User_name"=>$User_name,"Password"=>$enc_Pass,"created_dt"=>$curent_dt,
					"updated_dt"=>$curent_dt);

					$res=$this->insert('customer',$data);
				if($res)
				{
					echo "<script>
					alert('customer Add Success');
					window.location='login';
					</script>";
				}
				else
				{
					echo "<script>
					alert('customer Add Failed');
					window.location='index';
					</script>";
				}
			}
				include_once('register.php');
					break;

			case '/services':
				include_once('services.php');
					break;

			case '/tracking':
				include_once('tracking.php');
					break;

			case '/checkout':
				if(isset($_REQUEST['submit']))
				{
					$first_name=$_REQUEST['first_name'];
					$last_name=$_REQUEST['last_name'];
					$country=$_REQUEST['country'];
					$street_address=$_REQUEST['street_address'];
					$city=$_REQUEST['city'];
					$state=$_REQUEST['state'];
					$phone=$_REQUEST['phone'];
					$email=$_REQUEST['email'];
					$order_notes=$_REQUEST['order_notes'];
					
					//current dt
					date_default_timezone_set("asia/calcutta");
					$curent_dt=date("Y-m-d H:i:s");
				
					$data=array("first_name"=>$first_name,"last_name"=>$last_name,"country"=>$country,"street_address"=>$street_address,
					"city"=>$city,"state"=>$state,"phone"=>$phone,"email"=>$email,"order_notes"=>$order_notes,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
					$res=$this->insert('billing_details',$data);
					
				if($res) 			
				{	
				    echo"<script>
					alert('Order sent Successfully');
					window.location='checkout';
					</script>";
				}
				else
				{
					"<script>
					alert('Order not sent ');
					</script>";	
				}
				}
				include_once('checkout.php');
					break;

			case '/privacy-policy':
				include_once('privacy-policy.php');
					break;

			case '/login':
				if(isset($_REQUEST['login']))
				{
					$User_name=$_REQUEST['User_name'];
					$Password=$_REQUEST['Password'];
					$enc_Pass=md5($Password);
				
					$where=array("User_name"=>$User_name,"Password"=>$enc_Pass);
					$res=$this->select_where('customer',$where);
					$ans=$res->num_rows;
					if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="Unblock")
					{
					$User_name=$fetch->User_name;
					$customer_id=$fetch->customer_id;
					$Profile_img=$fetch->Profile_img;
					
					$_SESSION['User_name']=$User_name;
					$_SESSION['customer_id']=$customer_id;
					$_SESSION['Profile_img']=$Profile_img;
					
				    echo"<script>
					alert('Login Success');
					window.location='index';
					</script>";
					}
					else
				{
					echo "<script>
					alert('Login Failed Due To Customer is block!');
					window.location='login';
					</script>";	
				}
				}
				else
				{
					echo "<script>
					alert('Login Failed Due To wrong credantial!');
					window.location='login';
					</script>";	
				}
				}
				include_once('login.php');
				break;

				case '/logout':
					unset($_SESSION['name']);
					unset($_SESSION['customer_id']);
					unset($_SESSION['Profile_img']);
					echo "<script>
							alert('Logout Success');
							window.location='index';
							</script>";
				include_once('login.php');
				break;

				case '/myaccount':
					$customer_id=$_SESSION['customer_id'];
					$where=array("customer_id"=>$customer_id);
					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();
					include_once('myaccount.php');
					break;

			case '/blog':
				include_once('blog.php');
					break;

			case '/contact':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$message=$_REQUEST['message'];
					
					//current dt
					date_default_timezone_set("asia/calcutta");
					$curent_dt=date("Y-m-d H:i:s");
				
					$data=array("name"=>$name,"email"=>$email,"message"=>$message,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
					$res=$this->insert('contact_us',$data);
				if($res) 			
				{	
				    echo"<script>
					alert('message sent Successfully');
					window.location='index';
					</script>";
				}
				else
				{
					"<script>
					alert('message not sent ');
					</script>";	
				}
				}
				include_once('contact.php');
					break;
			
			case '/feedback':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$message=$_REQUEST['message'];
					
					//current dt
					date_default_timezone_set("asia/calcutta");
					$curent_dt=date("Y-m-d H:i:s");
				
					$data=array("name"=>$name,"email"=>$email,"message"=>$message,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
					$res=$this->insert('feedback',$data);
				if($res) 			
				{	
				    echo"<script>
					alert('message sent Successfully');
					window.location='index';
					</script>";
				}
				else
				{
					echo"<script>
					alert('message not sent ');
					</script>";	
				} 
				}
				include_once('feedback.php');
					break;

			case '/about':
				include_once('about.php');
					break;

			case '/cart':
				if(isset($_REQUEST['submit']))
						{
							$drone_model=$_REQUEST['drone_model'];
							$drone_price=$_REQUEST['drone_price'];
							$Email=$_REQUEST['Email'];
							$User_name=$_REQUEST['User_name'];
							$password=$_REQUEST['password'];
							$enc_pass=md5($password);
							
							//img upload
							$drone_pic=$_FILES['drone_pic']['name'];
							$path='../client/upload/drone/'.$drone_pic;
							$dup_drone_pic=$_FILES['drone_pic']['tmp_name'];
							move_uploaded_file($dup_drone_pic,$path);
					
						//current dt
						date_default_timezone_set("asia/calcutta");
						$curent_dt=date("Y-m-d H:i:s");
			
						$data=array("drone_pic"=>$drone_pic,"drone_model"=>$drone_model,"drone_price"=>$drone_price,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
			
						$res=$this->insert('cart',$data);
			
						if($res)
							{
								echo "<script>
								alert('Drone Add to cart Success');
								window.location='add_client';
								</script>";
							}
							else
							{
								echo "Not success";
							}
						}
						
				include_once('cart.php');
					break;

			case '/client_request':
			if(isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['Name'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				$Email=$_REQUEST['Email'];
				$Gender=$_REQUEST['Gender'];
				$city=$_REQUEST['city'];
				$pincode=$_REQUEST['pincode'];
		
				

			//current dt
			date_default_timezone_set("asia/calcutta");
			$curent_dt=date("Y-m-d H:i:s");

			$data=array("Name"=>$Name,"Mobile_no"=>$Mobile_no,"Email"=>$Email,"Gender"=>$Gender,
			"city"=>$city,"pincode"=>$pincode,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);

			$res=$this->insert('client',$data);

			if($res)
				{
					unlink('../client/upload/shop/'.$old_shop_img);
					echo "<script>
					alert('Client request sent');
					window.location='client_request';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('client_request.php');
			break;

			case '/dron-details':
				include_once('dron-details.php');
					break;

					case '/radio button':
						include_once('radio button.php');
							break;

			

			case '/product':
				if(isset($_REQUEST['btn_droneadv_id']))
						{
							$droneadv_id=$_REQUEST['btn_droneadv_id'];
							$where=array("droneadv_id"=>$droneadv_id);
							$res=$this->select_where('droneadv',$where);
							$fetch=$res->fetch_object();
						}
				include_once('product1.php');
					break;

			case '/bookdrone':
				$drone_type_id_arr=$this->select('drone_type');
				$loca_id_arr=$this->select('location');
				include_once('bookdrone.php');
					break;

		
					case '/edit_user':
						if(isset($_REQUEST['btn_customer_id']))
						{
							$customer_id=$_REQUEST['btn_customer_id'];
							$where=array("customer_id"=>$customer_id);
							$res=$this->select_where('customer',$where);
							$fetch=$res->fetch_object();
							$old_Profile_img=$fetch->Profile_img;
							
							if(isset($_REQUEST['update']))
							{
								$User_name=$_REQUEST['User_name'];
								$Mobile_no=$_REQUEST['Mobile_no'];
								$Email=$_REQUEST['Email'];
								$Gender=$_REQUEST['Gender'];
								$Address=$_REQUEST['Address'];
								//current dt
								date_default_timezone_set("asia/calcutta");
								$updated_dt=date("Y-m-d H:i:s");
								
								if($_FILES['Profile_img']['size']>0)
								{
									//img upload
									$Profile_img=$_FILES['Profile_img']['name'];
									$path='upload/customer/'.$Profile_img;
									$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
									move_uploaded_file($dup_Profile_img,$path);
					
									$data=array("Profile_img"=>$Profile_img,"User_name"=>$User_name,"Mobile_no"=>$Mobile_no,"Email"=>$Email,"Gender"=>$Gender,"updated_dt"=>$updated_dt);
									$res=$this->update_where('customer',$data,$where);
									if($res)
									{
										unlink('upload/customer/'.$old_Profile_img);
										echo "<script>
										alert('customer Update Success');
										window.location='myaccount';
										</script>";
									}
								}
								else
								{
									$data=array("User_name"=>$User_name,"Mobile_no"=>$Mobile_no,"Email"=>$Email,"Gender"=>$Gender,"updated_dt"=>$updated_dt);
									$res=$this->update_where('customer',$data,$where);
									if($res)
									{
										echo "<script>
										alert('customer Update Success');
										window.location='myaccount';
										</script>";
									}
								}
								
							}
							
						}
						include_once('edit_user.php');
						break;

						case '/billing':
							include_once('billing.php');
								break;

			default:
			echo "Page Not Found";
			break;
		}
		
	}
	
}


$obj=new control;



?>