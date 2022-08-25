<?php
	include_once('../admin/model.php');

class control extends model
{ 
	function __construct()
	{
		session_start();
		$path=$_SERVER['PATH_INFO'];
		model:: __construct();// GET URL PATH 
		
		switch($path)
		{
			case '/index':
				if(isset($_REQUEST['Submit']))
				{
					$Username=$_REQUEST['Username'];
					$Password=$_REQUEST['Password'];
					$enc_Pass=md5($Password);
				
					$where=array("Username"=>$Username,"Password"=>$enc_Pass);
					$res=$this->select_where('employee',$where);
					$ans=$res->num_rows;
					if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$Username=$fetch->Username;
					$Employee_id=$fetch->Employee_id;
					$Profile_img=$fetch->Profile_img;
					
					$_SESSION['employee']=$Username;
					$_SESSION['Employee_id']=$Employee_id;
					$_SESSION['Profile_img']=$Profile_img;
					
					if(isset($_REQUEST['remember']))
					{
						setcookie('Username',$Username,time()+(24*60*60));
						setcookie('Password',$Password,time()+(24*60*60));
					}
				     echo"<script>
					alert('Login Success');
					window.location='dashboard';
					</script>";
					
				}
				else
				{
					echo "<script>
					alert('Login Failed Due To wrong credantial!');
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
					
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_emp':
			if(isset($_REQUEST['submit']))
			{
				//$Profile_img=$_REQUEST['Profile_img'];
				$First_name=$_REQUEST['First_name'];
				$Last_name=$_REQUEST['Last_name'];
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_password=md5($Password);
				$Birth_of_date=$_REQUEST['Birth_of_date'];
				$Gender=$_REQUEST['Gender'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				$Job_title=$_REQUEST['Job_title'];
				$Salary=$_REQUEST['Salary'];
				$Address=$_REQUEST['Address'];


				//img upload
				$Profile_img=$_FILES['Profile_img']['name'];
				$path='upload/employee/'.$Profile_img;
				$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
				move_uploaded_file($dup_Profile_img,$path);
		
			//current dt
			date_default_timezone_set("asia/calcutta");
			$curent_dt=date("Y-m-d H:i:s");

			$data=array("Profile_img"=>$Profile_img,"First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,"Password"=>$enc_password,"Birth_of_date"=>$Birth_of_date,
			"Gender"=>$Gender,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Job_title"=>$Job_title,"Salary"=>$Salary,"Address"=>$Address,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);

			$res=$this->insert('employee',$data);

			if($res)
				{
					echo "<script>
					alert('Employee Add Success');
					window.location='add_emp';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('add_emp.php');
			break;

			case '/add_drone':
				if(isset($_REQUEST['Submit']))
				{
					//$drone_pic=$_REQUEST['drone_pic'];
					$drone_type=$_REQUEST['drone_type'];
					$description=$_REQUEST['description'];
						
				//img upload
				$drone_img=$_FILES['drone_img']['name'];
				$path='upload/drone/'.$drone_img;
				$dup_drone_img=$_FILES['drone_img']['tmp_name'];
				move_uploaded_file($dup_drone_img,$path);
			
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
	
				$data=array("drone_img"=>$drone_img,"drone_type"=>$drone_type,"description"=>$description,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
	
				$res=$this->insert('drone_type',$data);
	
				if($res)
					{
						echo "<script>
						alert('Drone Add Success');
					window.location='add_drone';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
			include_once('add_drone.php');
			break;
			
			case '/myaccount':
				$Employee_id=$_SESSION['Employee_id'];
				$where=array("Employee_id"=>$Employee_id);
				$res=$this->select_where('employee',$where);
				$fetch=$res->fetch_object();
				include_once('myaccount.php');
				break;

				case '/edit_employee':
					if(isset($_REQUEST['btn_Employee_id']))
					{
						$Employee_id=$_REQUEST['btn_Employee_id'];
						$where=array("Employee_id"=>$Employee_id);
						$res=$this->select_where('employee',$where);
						$fetch=$res->fetch_object();
						$old_Profile_img=$fetch->Profile_img;
						
						if(isset($_REQUEST['update']))
						{
							$Username=$_REQUEST['Username'];
							$First_name=$_REQUEST['First_name'];
							$Last_name=$_REQUEST['Last_name'];
							$Birth_of_date=$_REQUEST['Birth_of_date'];
							$Gender=$_REQUEST['Gender'];
							$Email=$_REQUEST['Email'];
							$Mobile_no=$_REQUEST['Mobile_no'];
							$Address=$_REQUEST['Address'];

							//current dt
							date_default_timezone_set("asia/calcutta");
							$updated_dt=date("Y-m-d H:i:s");
							
							if($_FILES['Profile_img']['size']>0)
							{
								//img upload
								$Profile_img=$_FILES['Profile_img']['name'];
								$path='../admin/upload/employee/'.$Profile_img;
								$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
								move_uploaded_file($dup_Profile_img,$path);
				
								$data=array("Profile_img"=>$Profile_img,"Username"=>$Username,"First_name"=>$First_name,"Last_name"=>$Last_name,"Birth_of_date"=>$Birth_of_date,"Gender"=>$Gender,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Address"=>$Address,"updated_dt"=>$updated_dt);
								$res=$this->update_where('employee',$data,$where);
								if($res)
								{
									unlink('../admin/upload/employee/'.$old_Profile_img);
									echo "<script>
									alert('Employee Update Success');
									window.location='myaccount';
									</script>";
								}
							}
							else
							{
								$data=array("Username"=>$Username,"First_name"=>$First_name,"Last_name"=>$Last_name,"Birth_of_date"=>$Birth_of_date,"Gender"=>$Gender,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Address"=>$Address,"updated_dt"=>$updated_dt);
								$res=$this->update_where('employee',$data,$where);
								if($res)
								{
									echo "<script>
									alert('Employee Update Success');
									window.location='myaccount';
									</script>";
								}
							}
							
						}
						
					}
					include_once('edit_employee.php');
					break;

					case '/add_client':
						if(isset($_REQUEST['Submit']))
						{
							$Name=$_REQUEST['Name'];
							$Mobile_no=$_REQUEST['Mobile_no'];
							$Email=$_REQUEST['Email'];
							$User_name=$_REQUEST['User_name'];
							$password=$_REQUEST['password'];
							$enc_pass=md5($password);
							
							//img upload
							$Profile_img=$_FILES['Profile_img']['name'];
							$path='../admin/upload/client/'.$Profile_img;
							$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
							move_uploaded_file($dup_Profile_img,$path);
					
						//current dt
						date_default_timezone_set("asia/calcutta");
						$curent_dt=date("Y-m-d H:i:s");
			
						$data=array("Profile_img"=>$Profile_img,"Name"=>$Name,"Mobile_no"=>$Mobile_no,"Email"=>$Email,"User_name"=>$User_name,"password"=>$enc_pass,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
			
						$res=$this->insert('client',$data);
			
						if($res)
							{
								echo "<script>
								alert('Client Add Success');
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
			
						case '/manage_drone_adv':
							$drone_arr=$this->select_join4('droneadv','location','droneadv.Location_id=location.Location_id','client','droneadv.Client_id=client.Client_id','drone_type','droneadv.drone_type_id=drone_type.drone_type_id');
							include_once('manage_drone_adv.php');
							break;

							case '/manage_shop_adv':
							$shop_arr=$this->select_join3('shopadv','location','shopadv.Location_id=location.Location_id','client','shopadv.Client_id=client.Client_id');
								include_once('manage_shop_adv.php');
								break;

						case '/edit_client':
							if(isset($_REQUEST['btn_Client_id']))
							{
								$Client_id=$_REQUEST['btn_Client_id'];
								$where=array("Client_id"=>$Client_id);
								$res=$this->select_where('client',$where);
								$fetch=$res->fetch_object();
								
								if(isset($_REQUEST['update']))
								{
									$User_name=$_REQUEST['User_name'];
									$password=$_REQUEST['password'];
									$enc_pass=md5($password);
		
									//current dt
									date_default_timezone_set("asia/calcutta");
									$updated_dt=date("Y-m-d H:i:s");
										
										$data=array("User_name"=>$User_name,"password"=>$enc_pass,"updated_dt"=>$updated_dt);
										$res=$this->update_where('client',$data,$where);
										if($res)
										{
											echo "<script>
											alert('Client Update Success');
											window.location='manage_client';
											</script>";
										}
								}
								
							}
							include_once('edit_client.php');
							break;

			case '/manage_emp':
			$employee_arr=$this->select('employee');
			include_once('manage_emp.php');
			break;
			
			case '/manage_customer':
			$customer_arr=$this->select('customer');
			include_once('manage_customer.php');
			break;
		
			case '/manage_client':
			$client_arr=$this->select('client');
			include_once('manage_client.php');
			break;
			
			case '/manage_drone':
			$product_arr=$this->select('drone_type');
			include_once('manage_drone.php');
			break;
			
			case '/manage_order_list':
			$orderlist_arr=$this->select('your_order');
			include_once('manage_order_list.php');
			break;

			case '/manage_contact_us':
			$contactus_arr=$this->select('contact_us');
			include_once('manage_contact_us.php');
			break;

			case '/manage_billing_details':
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
	
				$data=array("first_name"=>$first_name,"last_name"=>$last_name,"country"=>$country,"street_address"=>$street_address,"city"=>$city,
				"state"=>$state,"phone"=>$phone,"email"=>$email,"order_notes"=>$order_notes,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
	
				$res=$this->insert('billing_details',$data);
	
				if($res)
					{
						echo "<script>
						alert('Employee Add Success');
						window.location='add_emp';
						</script>";
					}
					else
					{
						echo "Not success";
					}
				}
			$payment_details_arr=$this->select('billing_details');
			include_once('manage_billing_details.php');
			break;

			case '/manage_feedback':
			$feedback_arr=$this->select('feedback');
			include_once('manage_feedback.php');
			break;
			
			case '/manage_payment_details':
			$payment_details_arr=$this->select('payment_details');
			include_once('manage_payment_details.php');
			break;
			
			case '/delete':
				if(isset($_REQUEST['del_feedback_id']))
				{
					$feedback_id=$_REQUEST['del_feedback_id'];
					$where=array("feedback_id"=>$feedback_id);
					$res=$this->delete_where('feedback',$where);
					if($res)
					{
						echo "<script>
						alert('Contact Delete Success');
						window.location='manage_feedback';
						</script>";
					}
				}
	
				
				if(isset($_REQUEST['del_drone_id']))
				{
					$drone_id=$_REQUEST['del_drone_id'];
					$where=array("drone_id"=>$drone_id);
					
					$res=$this->select_where('product',$where);
					$fetch=$res->fetch_object();
					$drone_pic=$fetch->drone_pic;
					
					$res=$this->delete_where('product',$where);
					if($res)
					{
						unlink('upload/drone/'.$drone_pic);
						echo "<script>
						alert('customer Delete Success');
						window.location='manage_drone';
						</script>";
					}
				}
				
				
				if(isset($_REQUEST['del_contact_id']))
				{
					$contact_id=$_REQUEST['del_contact_id'];
					$where=array("contact_id"=>$contact_id);
					$res=$this->delete_where('contact_us',$where);
					if($res)
					{
						echo "<script>
						alert('advertisement Delete Success');
						window.location='manage_contact_us';
						</script>";
					}
				}
				
				if(isset($_REQUEST['del_Client_id']))
				{
					$Client_id=$_REQUEST['del_Client_id'];
					$where=array("Client_id"=>$Client_id);
					$res=$this->delete_where('client',$where);
					if($res)
					{
						echo "<script>
						alert('client Delete Success');
						window.location='manage_client';
						</script>";
					}
				}
				
				if(isset($_REQUEST['del_customer_id']))
				{
					$customer_id=$_REQUEST['del_customer_id'];
					$where=array("customer_id"=>$customer_id);
					$res=$this->delete_where('customer',$where);

					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();
					$Profile_img=$fetch->Profile_img;

					if($res)
					{
						echo "<script>
						alert('customer Delete Success');
						window.location='manage_customer';
						</script>";
					}
				}
				
				if(isset($_REQUEST['del_order_list_id']))
				{
					$order_list_id=$_REQUEST['del_order_list_id'];
					$where=array("order_list_id"=>$order_list_id);
					$res=$this->delete_where('your_order',$where);
					if($res)
					{
						echo "<script>
						alert('employee Delete Success');
						window.location='manage_order_list';
						</script>";
					}
				}

				if(isset($_REQUEST['del_billing_details_id']))
				{
					$billing_details_id=$_REQUEST['del_billing_details_id'];
					$where=array("billing_details_id"=>$billing_details_id);
					$res=$this->delete_where('billing_details',$where);
					if($res)
					{
						echo "<script>
						alert('employee Delete Success');
						window.location='manage_billing_details';
						</script>";
					}
				}
				
			
				if(isset($_REQUEST['del_payment_details_id']))
				{
					$payment_details_id=$_REQUEST['del_payment_details_id'];
					$where=array("payment_details_id"=>$payment_details_id);
					$res=$this->delete_where('payment_details',$where);
					if($res)
					{
						echo "<script>
						alert('employee Delete Success');
						window.location='manage_payment_details';
						</script>";
					}
				}
				break;
			
			case '/status':
			if(isset($_REQUEST['status_customer_id']))
			{
				$customer_id=$_REQUEST['status_customer_id'];
				$where=array("customer_id"=>$customer_id);
				
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				$status=$fetch->status;
				if($status=="Block")
				{
					$data=array("status"=>"Unblock");
					$res1=$this->update_where('customer',$data,$where);
					{
						
						echo "<script>
						alert('customer Unblock Success');
						window.location='manage_customer';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"Block");
					$res1=$this->update_where('customer',$data,$where);
					{
						
						echo "<script>
						alert('customer Block Success');
						window.location='manage_customer';
						</script>";
					}
				}
			}

			if(isset($_REQUEST['status_Client_id']))
			{
				$Client_id=$_REQUEST['status_Client_id'];
				$where=array("Client_id"=>$Client_id);
				
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				$status=$fetch->status;
				if($status=="Block")
				{
					$data=array("status"=>"Unblock");
					$res1=$this->update_where('client',$data,$where);
					{
						
						echo "<script>
						alert('client Unblock Success');
						window.location='manage_client';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"Block");
					$res1=$this->update_where('client',$data,$where);
					{
						
						echo "<script>
						alert('client Block Success');
						window.location='manage_client';
						</script>";
					}
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