<?php
	include_once('model.php');

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
				if(isset($_REQUEST['submit']))
				{
					$username=$_REQUEST['username'];
					$password=$_REQUEST['password'];
					$enc_Pass=md5($password);
				
					$where=array("username"=>$username,"password"=>$enc_Pass);
					$res=$this->select_where('admin',$where);
					$ans=$res->num_rows;
					if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$username=$fetch->username;
					$admin_id=$fetch->admin_id;
					
					$_SESSION['admin']=$username;
					$_SESSION['admin_id']=$admin_id;
					if(isset($_REQUEST['remember']))
					{
						setcookie('username',$username,time()+(24*60*60));
						setcookie('password',$password,time()+(24*60*60));
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
					unset($_SESSION['admin']);
					unset($_SESSION['admin_id']);
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
					$drone_price=$_REQUEST['drone_price'];
						
				//img upload
				$drone_pic=$_FILES['drone_pic']['name'];
				$path='upload/drone/'.$drone_pic;
				$dup_drone_pic=$_FILES['drone_pic']['tmp_name'];
				move_uploaded_file($dup_drone_pic,$path);
			
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
	
				$data=array("drone_pic"=>$drone_pic,"drone_type"=>$drone_type,"drone_price"=>$drone_price,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
	
				$res=$this->insert('droneadv',$data);
	
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
			$product_arr=$this->select('droneadv');
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
					$company_name=$_REQUEST['company_name'];
					$country=$_REQUEST['country'];
					$street_address=$_REQUEST['street_address'];
					$city=$_REQUEST['city'];
					$state=$_REQUEST['state'];
					$phone=$_REQUEST['phone'];
					$email=$_REQUEST['email'];
					$order_notes=$_REQUEST['order_notes'];
	
				$data=array("first_name"=>$first_name,"last_name"=>$last_name,"company_name"=>$company_name,"country"=>$country,"street_address"=>$street_address,"city"=>$city,
				"state"=>$state,"phone"=>$phone,"email"=>$email,"order_notes"=>$order_notes,);
	
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
						alert('customer Delete Success');
						window.location='manage_emp';
						</script>";
					}
				}
				
				if(isset($_REQUEST['del_drone_id']))
				{
					$drone_id=$_REQUEST['del_drone_id'];
					$where=array("drone_id"=>$drone_id);
					
					$res=$this->select_where('droneadv',$where);
					$fetch=$res->fetch_object();
					$drone_pic=$fetch->drone_pic;
					
					$res=$this->delete_where('droneadv',$where);
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