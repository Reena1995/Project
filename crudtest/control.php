<?php
include_once('model.php');
class control extends model
{ 
	function __construct()
	{
		session_start();
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		model::__construct();
		
		switch($path)
		{
		
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			
			case '/add_user':
			if(isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['name'];
				$surname=$_REQUEST['surname'];
				$gender=$_REQUEST['gender'];
				$city=$_REQUEST['city'];
				
				
				
				
				$data=array("name"=>$Name,"surname"=>$surname,"gender"=>$gender,
				"city"=>$city);
				
				$res=$this->insert('user',$data);
				if($res)
				{
					echo "<script>
					alert('User Add Success');
					window.location='manage_user';
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
			$user_arr=$this->select('user');
			include_once('manage_user.php');
			break;
			
			
			case '/edit_user':
			if(isset($_REQUEST['btn_user_id']))
			{
				$user_id=$_REQUEST['btn_user_id'];
				$where=array("user_id"=>$user_id);
				$res=$this->select_where('user',$where);
				$fetch=$res->fetch_object();
				
				if(isset($_REQUEST['update']))
				{
					$name=$_REQUEST['name'];
					$surname=$_REQUEST['surname'];
					$gender=$_REQUEST['gender'];
					$city=$_REQUEST['city'];
					
					
					$data=array("name"=>$name,"surname"=>$surname,"gender"=>$gender,"city"=>$city);
					$res=$this->update_where('user',$data,$where);
					if($res)
					{
						echo "<script>
						alert('user updated successfully');
						window.location='manage_user';
						</script>";
					}
				}
			}
			include_once('edit_user.php');
			break;
			
			case '/delete':
			
			if(isset($_REQUEST['del_user_id']))
			{
				$user_id=$_REQUEST['del_user_id'];
				$where=array("user_id"=>$user_id);
				
				$res=$this->select_where('user',$where);
				$fetch=$res->fetch_object();
				
				
				$res=$this->delete_where('user',$where);
				if($res)
				{
					
					echo "<script>
					alert('user Delete Success');
					window.location='manage_user';
					</script>";
				}
			}	
			
				default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}

$obj=new control;

?>