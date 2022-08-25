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
				$img=$_FILES['img']['name'];
				$path='../upload/users/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("y-m-d H:i:s");
				$data=array("name"=>$name,"uname"=>$uname,"EMAIL"=>$EMAIL,"img"=>$img,"mobile_no"=>$mobile_no,"gender"=>$gender,"pwd"=>$enc_pass,"create_dt"=>$curent_dt,
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
			$old_img=$fetch->img;
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
				if($_FILES['img']['size']>0)
				{
				$img=$_FILES['img']['name'];
				$path='../upload/users/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				$data=array("name"=>$name,"uname"=>$uname,"EMAIL"=>$EMAIL,"img"=>$img,"mobile_no"=>$mobile_no,"gender"=>$gender,"update_dt"=>$updated_dt,
				"update_dt"=>$updated_dt);
				$res=$this->update_where('users',$data,$where);
				if($res)
				{
					unlink('../upload/users/'.$old_img);
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
			include_once('store.php');
			break;
			
			case '/service':
			include_once('service.php');
			break;
			
			
			case '/team':
			include_once('team.php');
			break;
			
			case '/Requesting':
			include_once('Requesting.php');
			break;
			
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>