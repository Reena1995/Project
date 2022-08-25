<?php
include_once('model.php');
class control extends model
{ 
	function __construct()
	{
		session_start();
		$path=$_SERVER['PATH_INFO']; 
		model::__construct();
		// GET URL PATH 
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/register':
			if(isset($_REQUEST['signup']))
			{
				$name=$_REQUEST['name'];
				$uname=$_REQUEST['uname'];
				$EMAIL=$_REQUEST['EMAIL'];
				$mobile_no=$_REQUEST['mobile_no'];
				$gender=$_REQUEST['gender'];
				$pwd=$_REQUEST['pwd'];
				$enc_pass=md5($pwd);
				//img upload
				$Img=$_FILES['Img']['name'];
				$path='../upload/users/'.$Img;
				$dup_Img=$_FILES['Img']['tmp_name'];
				move_uploaded_file($dup_Img,$path);
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("y-m-d H:i:s");
				$data=array("name"=>$name,"uname"=>$uname,"EMAIL"=>$EMAIL,"Img"=>$Img,"mobile_no"=>$mobile_no,"gender"=>$gender,"pwd"=>$enc_pass,"create_dt"=>$curent_dt,
				"update_dt"=>$curent_dt);
				
				$res=$this->insert('users',$data);
				if($res)
				{
					echo "<script>
					alert('user Add Successfully');
					window.location='register';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('register.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['login']))
			{
				$uname=$_REQUEST['uname'];
				$pwd=$_REQUEST['pwd'];
				$enc_pass=md5($pwd);
				$where=array("uname"=>$uname,"pwd"=>$enc_pass);
				$res=$this->select_where('users',$where);
				$ans=$res->num_rows;
				if($ans==1)
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="UNBLOCK")
					{
						$name=$fetch->name;
						$u_id=$fetch->u_id;
						$_SESSION['name']=$name;
						$_SESSION['u_id']=$u_id;
						echo "<script>
						alert('login successfull');
						window.location='index';
						</script>";
					}
					else
					{
						echo "<script>
						alert('login failed due to user is block');
						window.location='login';
						</script>";
					}
				}
				else
				{
						echo "<script>
						alert('login failed due to credantial!');
						window.location='login';
						</script>";
				}
			}
			include_once('login.php');
			break;
			 
			case '/logout':
			unset($_SESSION['name']);
			unset($_SESSION['u_id']);
			echo "<script>
					alert('logout successfully');
					window.location='index';
					</script>";
					include_once('login.php');
					break;
			case '/about':
			include_once('about.php');
			break;
			
			case '/blog':
			include_once('blog.php');
			break;
			
			case '/reviews':
			$u_id=$_SESSION['u_id'];
			$where=array("u_id"=>$u_id);
			$res=$this->select_where('users',$where);
			$fetch=$res->fetch_object();
			if(isset($_REQUEST['submit']))
			{
				$u_id=$_SESSION['u_id'];
				$description=$_REQUEST['description'];
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("y-m-d H:i:s");
				$data=array("u_id"=>$u_id,"description"=>$description,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
				$res=$this->insert('reviews',$data);
				if($res)
				{
					echo "<script>
					alert('reviews added successfully');
					window.location='reviews';
					</script>";
				}
				else
				{
					echo "not success";
				}
			}
			include_once('reviews.php');
			break;
			
			case '/myaccount':
			$u_id=$_SESSION['u_id'];
			$where=array("u_id"=>$u_id);
			$res=$this->select_where('users',$where);
			$fetch=$res->fetch_object();
			include_once('myaccount.php');
			break;
			
			case '/edit_user':
			if(isset($_REQUEST['btn_u_id']))
			{
			$u_id=$_REQUEST['btn_u_id'];
			$where=array("u_id"=>$u_id);
			$res=$this->select_where('users',$where);
			$fetch=$res->fetch_object();
			$old_Img=$fetch->Img;
			if(isset($_REQUEST['update']))
			{
				$name=$_REQUEST['name'];
				$uname=$_REQUEST['uname'];
				$EMAIL=$_REQUEST['EMAIL'];
				$mobile_no=$_REQUEST['mobile_no'];
				$gender=$_REQUEST['gender'];
				date_default_timezone_set("asia/calcutta");
				$updated_dt=date("y-m-d H:i:s");
				
				//img upload
				if($_FILES['Img']['size']>0)
				{
				$Img=$_FILES['Img']['name'];
				$path='../upload/users/'.$Img;
				$dup_Img=$_FILES['Img']['tmp_name'];
				move_uploaded_file($dup_Img,$path);
				$data=array("name"=>$name,"uname"=>$uname,"EMAIL"=>$EMAIL,"Img"=>$Img,"mobile_no"=>$mobile_no,"gender"=>$gender,"update_dt"=>$updated_dt,
				"update_dt"=>$updated_dt);
				$res=$this->update_where('users',$data,$where);
				if($res)
				{
					unlink('../upload/users/'.$old_Img);
					echo "<script>
					alert('customer update success');
					window.location='myaccount';
					</script>";
				}
				}
				else
				{
				$data=array("name"=>$name,"uname"=>$uname,"EMAIL"=>$EMAIL,"mobile_no"=>$mobile_no,"gender"=>$gender,"update_dt"=>$updated_dt);
				$res=$this->update_where('users',$data,$where);
				if($res)
				{
					echo "<script>
					alert('customer update success');
					window.location='myaccount';
					</script>";
				}
				
					}
			}
			}
			include_once('edit_user.php');
			break;	
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$f_name=$_REQUEST['f_name'];
				$l_name=$_REQUEST['l_name'];
				$email=$_REQUEST['email'];
				$phone=$_REQUEST['phone'];
				$description=$_REQUEST['description'];
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("y-m-d H:i:s");
				$data=array("f_name"=>$f_name,"l_name"=>$l_name,"email"=>$email,"mobile_no"=>$phone,"description"=>$description,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
				$res=$this->insert('contact',$data);
				if($res)
				{
					echo "<script>
					alert('contact added successfully');
					window.location='contact';
					</script>";
				}
				else
				{
					echo "not success";
				}
			}
			include_once('contact.php');
			break;
			
			case '/store':
			$shop_arr=$this->select('shop');
			include_once('store.php');
			break;
			
			case '/storeandbooking':
			if(isset($_REQUEST['btn_shop_id']))
						{
							$shop_id=$_REQUEST['btn_shop_id'];
							$where=array("shop_id"=>$shop_id);
							$res=$this->select_where('shop',$where);
							$fetch=$res->fetch_object();
						}
			include_once('shopdetailsandbookingrequest.php');
			break;
			
			case '/service':
			include_once('service.php');
			break;
			
			
			case '/shop':
			$shop_arr=$this->select('shop');
			include_once('shop.php');
			break;

					
			
			case '/Requesting':
			$brand_arr=$this->select('mob_brand');
			$model_arr=$this->select('model');
			$rep_type_arr=$this->select('rep_type');
			$loc_arr=$this->select('location');
			if(isset($_REQUEST['submit']))
			{
				$u_id=$_SESSION['u_id'];
				$brand_id=$_REQUEST['brand_id'];
				$model_id=$_REQUEST['model_id'];
				$rep_id=$_REQUEST['rep_id'];
				$loc_id=$_REQUEST['loc_id'];
				$description=$_REQUEST['description'];
				$mob_no=$_REQUEST['mob_no'];
				
				$img=$_FILES['img']['name'];
				$path='../upload/complaint/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
		
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
					
				$data=array("u_id"=>$u_id,"brand_id"=>$brand_id,"model_id"=>$model_id,"rep_id"=>$rep_id,"loc_id"=>$loc_id,"description"=>$description,"mob_no"=>$mob_no,"img"=>$img,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
				$res=$this->insert('complaint',$data);
				if($res)
				{
					echo "<script>
					alert('complaint added successfully');
					window.location='Requesting';
					</script>";
				}
				else
				{
					echo "Not Success";
				}
			}
			include_once('Requesting.php');
			break;
			
			case '/clientinquiry':
			if(isset($_REQUEST['submit']))
			{
				
				$client_name=$_REQUEST['client_name'];
				$email=$_REQUEST['email'];
				$mobile_no=$_REQUEST['mobile_no'];
				$shop_name=$_REQUEST['shop_name'];
				$address=$_REQUEST['address'];
				
				
				$Profile_img=$_FILES['Profile_img']['name'];
				$path='../upload/client/'.$Profile_img;
				$dup_img=$_FILES['Profile_img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
		
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
					
				$data=array("client_name"=>$client_name,"email"=>$email,"mobile_no"=>$mobile_no,"shop_name"=>$shop_name,"address"=>$address,"Profile_img"=>$Profile_img,"created_dt"=>$curent_dt,"updated_dt"=>$curent_dt);
				$res=$this->insert('client',$data);
				if($res)
				{
					echo "<script>
					alert('client added successfully');
					window.location='clientinquiry';
					</script>";
				}
				else
				{
					echo "Not Success";
				}
			}
			include_once('clientinquiry.php');
			break;
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>