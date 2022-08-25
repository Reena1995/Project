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
					$Profile_img=$fetch->Profile_img;
					
					$_SESSION['employee']=$Username;
					$_SESSION['Employee_id']=$Employee_id;
					$_SESSION['Profile_img']=$Profile_img;
					
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
				$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,"Email"=>$Email,"Profile_img"=>$Profile_img,"Mobile_no"=>$Mobile_no,"gender"=>$gender,"Updated_dt"=>$updated_dt,
				"Updated_dt"=>$updated_dt);
				$res=$this->update_where('employee',$data,$where);
				if($res)
				{
					unlink('../upload/employee/'.$old_img);
					echo "<script>
					alert('customer update success');
					window.location='myprofile';
					</script>";
				}
				}
				else
				{
				$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"gender"=>$gender,"Updated_dt"=>$updated_dt);
				$res=$this->update_where('employee',$data,$where);
				if($res)
				{
					echo "<script>
					alert('customer update success');
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
			
			case '/add_emp':
			
			if(isset($_REQUEST['submit']))
			{
				$First_name=$_REQUEST['First_name'];
				$Last_name=$_REQUEST['Last_name'];
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password);
				$Gender=$_REQUEST['Gender'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				
				//img upload
				$Profile_img=$_FILES['Profile_img']['name'];
				$path='../upload/employee/'.$Profile_img;
				$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
				move_uploaded_file($dup_Profile_img,$path);
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,"Password"=>$enc_pass,"Gender"=>$Gender,
				"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Profile_img"=>$Profile_img,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
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
			
			case '/manage_emp':
			$emp_arr=$this->select('employee');
			include_once('manage_emp.php');
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
					alert('Employee Add Success');
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
			if(isset($_REQUEST['submit']))
			{
				$brand_name=$_REQUEST['brand_name'];
				$model_name=$_REQUEST['model_name'];
				
				
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("brand_name"=>$brand_name,"brand_name"=>$brand_name,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('model',$data);
				if($res)
				{
					echo "<script>
					alert('Employee Add Success');
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
			
			
			case '/manage_mob_model':
			$model_arr=$this->select('model');
			include_once('manage_mob_model.php');
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
			$shop_arr=$this->select('shop');
			include_once('manage_shop.php');
			break;
			
			case '/manage_contact':
			$contact_arr=$this->select('contact');
			include_once('manage_contact.php');
			break;
			
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
			
			if(isset($_REQUEST['del_Booking_id']))
			{
				$Booking_id=$_REQUEST['del_Booking_id'];
				$where=array("Booking_id"=>$Booking_id);
				$res=$this->delete_where('booking',$where);
				if($res)
				{
					echo "<script>
					alert('booking Delete Success');
					window.location='manage_booking';
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
			
			if(isset($_REQUEST['del_Contact_id']))
			{
				$Contact_id=$_REQUEST['del_Contact_id'];
				$where=array("Contact_id"=>$Contact_id);
				$res=$this->delete_where('contact',$where);
				if($res)
				{
					echo "<script>
					alert('contact Delete Success');
					window.location='view_contact';
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