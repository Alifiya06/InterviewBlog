<?php

require('connect.php');

/*$sql = "select * from user";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_Assoc($result);

echo "<pre>",print_r($user),"</pre>";*/

function dd($value)   //to be deleted
{
	echo "<pre>",print_r($value,true),"</pre>";
	die();
}

function selectAll($table, $conditions = [])
{
	global $conn;
	$sql = "select * from $table";
	if(empty($conditions)){
		$result = mysqli_query($conn, $sql);
		$records = mysqli_fetch_Assoc($result);
		return $records;
	}
	else{
	    $i = 0;
	    foreach($conditions as $key => $value)
	    {
	    	if(is_string($value)) {
		    	if($i === 0){
		    		$sql = $sql." where $key=\"$value\"";
		    	}
		    	else{
		    		$sql = $sql." and $key=\"$value\"";
		    	}
		    }
		    else{
		    	if($i === 0){
		    		$sql = $sql." where $key=$value";
		    	}
		    	else{
		    		$sql = $sql." and $key= $value";
		    	}

		    }
	    	$i++;
	    }
	    $result = mysqli_query($conn,$sql);
		$records = mysqli_fetch_Assoc($result);
		return $records;
	}

}

function selectOne($table, $conditions)
{
	global $conn;
	$sql = "select * from $table";
    $i = 0;
    foreach($conditions as $key => $value)
	{
		if(is_string($value)) {
			if($i === 0){
			    $sql = $sql." where $key=\"$value\"";
			}
			else{
			    $sql = $sql." and $key=\"$value\"";
			}
	    }
		else{
			if($i === 0){
			    $sql = $sql." where $key=$value";
			}
			else{
			    $sql = $sql." and $key= $value";
			}

		}
		    	$i++;
	}

	$sql = $sql." LIMIT 1";
    $result = mysqli_query($conn,$sql);
	$records = mysqli_fetch_Assoc($result);
	return $records;
	

}

function create($table, $data)
{
	global $conn;
	//INSERT INTO users ('name','password')

}

$conditions = ['year'=>2, 'name' => 'alfu'];

$user = selectOne('user', $conditions);
dd($user);



?>