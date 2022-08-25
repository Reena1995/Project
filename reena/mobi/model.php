
<?php
  
  class model
  {
	  public $conn="";
	  
	  function __construct()
	  
	  {
		  $this->conn=new mysqli('localhost','root','','mobigo');
	  }
	   function select($tbl)
	   {
		   $sel="select * from $tbl";
		   $run=$this->conn->query($sel);
		   
		   while($fetch=$run->fetch_object())
		   {
			   $arr[]=$fetch;
		   }
		   return $arr;
	   }
	   function insert($tbl,$arr)
	{
		$key_arr=array_keys($arr); // array("0"=>emp_name,"1"=>emp_unm)
		$col=implode(",",$key_arr); // emp_name,emp_unm
		
		$value_arr=array_values($arr); // array("0"=>emp_name,"1"=>emp_unm)
		$value=implode("','",$value_arr); // emp_name,emp_unm
		
	echo 	$ins="insert into $tbl($col)values('$value')";  //'raj','raj@123','123'
		$run=$this->conn->query($ins); // run on db
		return $run;
	}
	   
	function select_where($table,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		$sel="select * from $table where 1=1";
		$i=0;
		foreach($where as $w)
		{
			 $sel.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);
		return $run;
		
	}
	function update_where($tbl,$data,$where)
	{
		$key_arr=array_keys($data);
		$value_arr=array_values($data);
		$upd="update $tbl set";
		$j=0;
		$total=count($data);
		foreach($data  as $d)
		{
			if($total==$j+1)
			{
				$upd.=" $key_arr[$j]='$value_arr[$j]'";
			}
			else
			{
				$upd.=" $key_arr[$j]='$value_arr[$j]',";
				$j++;
			}
		}
		$wkey_arr=array_keys($where);
		$wvalue_arr=array_values($where);
		$upd.=" where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$upd.=" and $wkey_arr[$i]='$wvalue_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd);
		return $run;
	}
  }
	function delete_where($table,$where)
	{
		$key_arr=array_keys($where);
		$value_arr=array_values($where);
		$del="delete from $table where 1=1";
		$i=0;
		foreach($where as $w)
		{
			$del.=" and $key_arr[$i]='$value_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);
		return $run;
	}
  $obj=new model;
?>