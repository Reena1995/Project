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
					$User_name=$_REQUEST['User_name'];
					$password=$_REQUEST['password'];
					$enc_Pass=md5($password);
				
					$where=array("User_name"=>$User_name,"password"=>$enc_Pass);
					$res=$this->select_where('client',$where);
					$ans=$res->num_rows;
					if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="Unblock")
					{
					$User_name=$fetch->User_name;
					$Client_id=$fetch->Client_id;
					$Profile_img=$fetch->Profile_img;
					
					$_SESSION['client']=$User_name;
					$_SESSION['Client_id']=$Client_id;
					$_SESSION['Profile_img']=$Profile_img;
					
					if(isset($_REQUEST['remember']))
					{
						setcookie('User_name',$User_name,time()+(24*60*60));
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
					alert('Login Failed Due To Client is block!');
					window.location='index';
					</script>";	
				}
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
					unset($_SESSION['client']);
					unset($_SESSION['Client_id']);
					echo "<script>
							alert('Logout Success');
							window.location='index';
							</script>";
					break;
					
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			
			
			case '/myaccount':
				$Client_id=$_SESSION['Client_id'];
				$where=array("Client_id"=>$Client_id);
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				include_once('myaccount.php');
				break;
			
				case '/edit_client':
					if(isset($_REQUEST['btn_Client_id']))
					{
						$Client_id=$_REQUEST['btn_Client_id'];
						$where=array("Client_id"=>$Client_id);
						$res=$this->select_where('client',$where);
						$fetch=$res->fetch_object();
						$old_Profile_img=$fetch->Profile_img;
						
						if(isset($_REQUEST['update']))
						{
							$Name=$_REQUEST['Name'];
							$Mobile_no=$_REQUEST['Mobile_no'];
							$Email=$_REQUEST['Email'];
							$Gender=$_REQUEST['Gender'];
							$User_name=$_REQUEST['User_name'];
							$shop_name=$_REQUEST['shop_name'];
							$shop_address=$_REQUEST['shop_address'];
							$city=$_REQUEST['city'];
							$pincode=$_REQUEST['pincode'];

							//current dt
							date_default_timezone_set("asia/calcutta");
							$updated_dt=date("Y-m-d H:i:s");
							
							if($_FILES['Profile_img']['size']>0)
							{
								//img upload
								$Profile_img=$_FILES['Profile_img']['name'];
								$path='../admin/upload/client/'.$Profile_img;
								$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
								move_uploaded_file($dup_Profile_img,$path);

								//img upload
								$shop_img=$_FILES['shop_img']['name'];
								$path='/upload/shop/'.$shop_img;
								$dup_shop_img=$_FILES['shop_img']['tmp_name'];
								move_uploaded_file($dup_shop_img,$path);
				
								$data=array("Profile_img"=>$Profile_img,"Name"=>$Name,"Mobile_no"=>$Mobile_no,"Email"=>$Email,"Gender"=>$Gender,"User_name"=>$User_name,"shop_name"=>$shop_name,"shop_img"=>$shop_img,"shop_address"=>$shop_address,"city"=>$city,"pincode"=>$pincode,"updated_dt"=>$updated_dt);
								$res=$this->update_where('client',$data,$where);
								if($res)
								{
									unlink('../admin/upload/client/'.$old_Profile_img);
									unlink('/upload/shop/'.$old_shop_img);
									echo "<script>
									alert('Client Update Success');
									window.location='myaccount';
									</script>";
								}
							}
							else
							{
								$data=array("Name"=>$Name,"Mobile_no"=>$Mobile_no,"Email"=>$Email,"Gender"=>$Gender,"User_name"=>$User_name,"shop_name"=>$shop_name,"shop_address"=>$shop_address,"city"=>$city,"pincode"=>$pincode,"updated_dt"=>$updated_dt);
								$res=$this->update_where('client',$data,$where);
								if($res)
								{
									echo "<script>
									alert('Client Update Success');
									window.location='myaccount';
									</script>";
								}
							}
							
						}
						
					}
					include_once('edit_client.php');
					break;

			case '/add_location':
				$loca_id_arr=$this->select('location');
				if(isset($_REQUEST['submit']))
				{
					
					$Loca_name=$_REQUEST['Loca_name'];
					$City=$_REQUEST['City'];
					
					//current dt
					date_default_timezone_set("asia/calcutta");
					$curent_dt=date("Y-m-d H:i:s");
					
					$data=array("Loca_name"=>$Loca_name,"City"=>$City,"Created_dt"=>$curent_dt,
					"Updated_dt"=>$curent_dt);
					
					$res=$this->insert('location',$data);
					if($res)
					{
						 echo"<script>
						alert('Location Add Success');
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
				$loca_arr=$this->select('location');
				include_once('manage_location.php');
				break;
	
				case '/add_drone_adv':
					$drone_type_id_arr=$this->select('drone_type');
					$loca_id_arr=$this->select('location');
					if(isset($_REQUEST['submit']))
					{
						$drone_type_id=$_REQUEST['drone_type_id'];
						$drone_model=$_REQUEST['drone_model'];
						$drone_price=$_REQUEST['drone_price'];
						$drone_shop=$_REQUEST['drone_shop'];
						$description=$_REQUEST['description'];
						$Location_id=$_REQUEST['Location_id'];
						$Client_id=$_SESSION['Client_id']; 
						
						//img upload
						$drone_pic=$_FILES['drone_pic']['name'];
						$path='upload/drone/'.$drone_pic;
						$dup_drone_pic=$_FILES['drone_pic']['tmp_name'];
						move_uploaded_file($dup_drone_pic,$path);
						
						//current dt
						date_default_timezone_set("asia/calcutta");
						$curent_dt=date("Y-m-d H:i:s");
						
						$data=array("drone_pic"=>$drone_pic,"drone_type_id"=>$drone_type_id,"drone_model"=>$drone_model,"drone_price"=>$drone_price,
						"drone_shop"=>$drone_shop,"description"=>$description,
						"Location_id"=>$Location_id,"Client_id"=>$Client_id,"Created_dt"=>$curent_dt,
						"Updated_dt"=>$curent_dt);
						
						$res=$this->insert('droneadv',$data);
						if($res)
						{
							echo "<script>
							alert('Drone Advertisement Add Success');
							window.location='add_drone_adv';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					include_once('add_drone_adv.php');
					break;
				
					case '/manage_drone_adv':
					$Client_id=$_SESSION['Client_id'];
					$where=array("client.Client_id"=>$Client_id);
					$res=$this->select_where_join4('droneadv','location','droneadv.Location_id=location.Location_id','client','droneadv.Client_id=client.Client_id','drone_type','droneadv.drone_type_id=drone_type.drone_type_id',$where);
					while($fetch=$res->fetch_object()) // data db fetch 
					{
						$drone_arr[]=$fetch;
					}

					include_once('manage_drone_adv.php');
					break;
					
					case '/add_shop_adv':
						$loca_id_arr=$this->select('location');
						if(isset($_REQUEST['submit']))
						{
							$shop_name=$_REQUEST['shop_name'];
							$shop_address=$_REQUEST['shop_address'];
							$Location_id=$_REQUEST['Location_id'];
							$Client_id=$_SESSION['Client_id'];
							
							//img upload
							$shop_img=$_FILES['shop_img']['name'];
							$path='upload/shop/'.$shop_img;
							$dup_shop_img=$_FILES['shop_img']['tmp_name'];
							move_uploaded_file($dup_shop_img,$path);
							
							//current dt
							date_default_timezone_set("asia/calcutta");
							$curent_dt=date("Y-m-d H:i:s");
							
							$data=array("shop_img"=>$shop_img,"shop_name"=>$shop_name,"Location_id"=>$Location_id,"shop_address"=>$shop_address,"Client_id"=>$Client_id,"Created_dt"=>$curent_dt,"Updated_dt"=>$curent_dt);
							
							$res=$this->insert('shopadv',$data);
							if($res)
							{
								echo "<script>
								alert('Shop Advertisement Add Success');
								window.location='add_shop_adv';
								</script>";
							}
							else
							{
								echo "Not success";
							}
						}
						include_once('add_shop_adv.php');
						break;
					
						case '/manage_shop_adv':
							$Client_id=$_SESSION['Client_id'];
							$where=array("client.Client_id"=>$Client_id);
	/*check this*/			$res=$this->select_where_join3('shopadv','location','shopadv.Location_id=location.Location_id','client','shopadv.Client_id=client.Client_id',$where);
							while($fetch=$res->fetch_object()) // data db fetch 
							{
								$shop_arr[]=$fetch;
							}
							include_once('manage_shop_adv.php');
							break;

			case '/delete':
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

				if(isset($_REQUEST['del_Location_id']))
				{
					$Location_id=$_REQUEST['del_Location_id'];
					$where=array("Location_id"=>$Location_id);
					
					$res=$this->select_where('location',$where);
					$fetch=$res->fetch_object();
					$drone_pic=$fetch->drone_pic;
					
					$res=$this->delete_where('location',$where);
					if($res)
					{
						echo "<script>
						alert('Location Delete Success');
						window.location='manage_location';
						</script>";
					}
				}

				if(isset($_REQUEST['del_droneadv_id']))
				{
					$droneadv_id=$_REQUEST['del_droneadv_id'];
					$where=array("droneadv_id"=>$droneadv_id);
					
					$res=$this->select_where('droneadv',$where);
					$fetch=$res->fetch_object();
					$drone_pic=$fetch->drone_pic;
					
					$res=$this->delete_where('droneadv',$where);
					if($res)
					{
						echo "<script>
						alert('drone adv Delete Success');
						window.location='manage_drone_adv';
						</script>";
					}
				}

				if(isset($_REQUEST['del_shopadv_id']))
				{
					$shopadv_id=$_REQUEST['del_shopadv_id'];
					$where=array("shopadv_id"=>$shopadv_id);
					
					$res=$this->select_where('shopadv',$where);
					$fetch=$res->fetch_object();
					$shop_img=$fetch->shop_img;
					
					$res=$this->delete_where('shopadv',$where);
					if($res)
					{
						echo "<script>
						alert('Shop adv Delete Success');
						window.location='manage_shop_adv';
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