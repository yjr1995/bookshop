<?php
	function get($table,$value,$key)
	{
    	$data="";
        $row=0;
	    $table=strtolower($table);
		if($key=="all")
		{
			$sql="select * from ".$table." order by id";
		} 
		else
		{
			$sql="select * from ".$table." where ".$key."='".$value."' order by id";
		}
		//echo $sql
		$query=mysql_query($sql);
		while($array=mysql_fetch_array($query))
		{
        	$data[$row]=$array;
            $row++;
		}
		if($row)
		{
			return $data;
		}else
		{
			return 0;
		}
	}
	
	//获取数据
 function gettwo($table,$value1,$key1,$value2,$key2){
       $data="";
       $row=0;
	   $table=strtolower($table);
		if($key=="all"){
		     $sql="select * from ".$table." order by id desc";
			} else{
			 $sql="select * from ".$table." where ".$key1."='".$value1."' and ".$key2."='".$value2."' order by id";
		}
		//echo $sql
		$query=mysql_query($sql,$this->conn);
		while($array=mysql_fetch_array($query)){
            $data[$row]=$array;
            $row++;
		}
	    $this->close_conn();
		if($row){
			return $data;
		}else{
			return 0;
		}
	}
	
	//insert information
	function insert($table,$key,$value){
		$table=strtolower($table);
		$count=count($value);
		$sql="insert into ".$table."(".$key[0];
      		 for($i=1;$i<$count;$i++){	$sql=$sql.",".$key[$i];       }
        $sql=$sql.") values('".$value[0]."'";
       		 for($i=1;$i<$count;$i++){  $sql=$sql.",'".$value[$i]."'";       }
        $sql=$sql.")";
      	//echo $sql;
       $query=mysql_query($sql) or die("请重命名！");
       return 1;
   		 }
	
	//update information
    function update($table,$value,$key){
	   $table=strtolower($table);
       $count=count($value);
       $sql="update ".$table." set ".$key[1]."='".$value[1]."'";
       for($i=2;$i<$count;$i++){
        $sql=$sql.",".$key[$i]."='".$value[$i]."'";
       }
       $sql=$sql."where ".$key[0]."='".$value[0]."'";
      // echo $sql;
       $query=mysql_query($sql) or die("mysql error");
       return 1;
    }
	
	//获取 information
	function getdata($table,$value,$key,$cou){
       $data="";
       $row=0;
	   $table=strtolower($table);
		if($key=="all"){
		     $sql="select * from ".$table." order by id desc limit 0,".$cou;
			} else{
			 $sql="select * from ".$table." where ".$key."='".$value."' order by id desc";
		}
		//echo $sql
		$query=mysql_query($sql,$this->conn);
		while($array=mysql_fetch_array($query)){
            $data[$row]=$array;
            $row++;
		}
	    $this->close_conn();
		if($row){
			return $data;
		}else{
			return 0;
		}
	}
	
	
	function fenye($table,$value,$key,$qi,$zhi){
       $data="";
       $row=0;
	   $table=strtolower($table);
		if($key=="all"){
		     $sql="select * from ".$table." order by id desc limit ".$qi.",".$zhi;
			} else{
			 $sql="select * from ".$table." where ".$key."='".$value."' order by id desc limit ".$qi.",".$zhi;
		}
		//echo $sql
		$query=mysql_query($sql,$this->conn);
		while($array=mysql_fetch_array($query)){
            $data[$row]=$array;
            $row++;
		}
	    $this->close_conn();
		if($row){
			return $data;
		}else{
			return 0;
		}
	}

	//delete information
	 function del($table,$value,$key){
       $sql="delete from ".$table." where ".$key."='".$value."'";
       $query=mysql_query($sql) or die ("mysql error");
       return 1;
    }
	
	//zhiye
	function getzhiye($table,$value,$key){
       $data="";
       $row=0;
	   $table=strtolower($table);
		if($key=="all"){
		     $sql="select * from ".$table." order by cx";
			} else{
			 $sql="select * from ".$table." where ".$key."='".$value."' order by cx";
		}
		//echo $sql
		$query=mysql_query($sql,$this->conn);
		while($array=mysql_fetch_array($query)){
            $data[$row]=$array;
            $row++;
		}
	    $this->close_conn();
		if($row){
			return $data;
		}else{
			return 0;
		}
	}
	
	
function gethuo($word,$table){
		$data="";
       $row=0;
	   $table=strtolower($table);
		$sql="select * from ".$table." order by id desc";
		//echo $sql
		$query=mysql_query($sql,$this->conn);
		$array=mysql_fetch_array($query);
		do{
			$data[$row]=$array->username;
            $row++;
			}while($array=mysql_fetch_array($query));
	    $this->close_conn();
		if($array){
			return $data;
		}else{
			return 0;
		}
	}

function tiezi($table,$key,$value){
		  $page=$_GET[page];
			if($page==""){$page=1;}
			if(is_numeric($page)){$page_size=9;	}
			if($key=="all")
			$result=mysql_query("select count(*) as total from ".$table);
			else
			$result=mysql_query("select count(*) as total from ".$table." where ".$key."='".$value."'");
			if($result){
			$message_count=mysql_result($result,0,"total");
			$page_count=ceil($message_count/$page_size);
			$offset=($page-1)*$page_size;
			if($key=="all")
				$res= mysql_query("select * from ".$table." order by id desc limit $offset,$page_size");
				else
  				$res = mysql_query("select * from ".$table." where ".$key."='".$value."' order by id desc limit $offset,$page_size");
 			    $rows=mysql_fetch_object($res);
				
				do{
					$huifu=mysql_query("select count(*) as total from chunyu_luntanhuifu where luntan_id='".$rows->id."'");
					if($huifu)
					$j=mysql_result($huifu,0,"total");
					
					$data.="<tr class='luntan05'><td class='td5'>&nbsp;&nbsp;&nbsp;&nbsp;<a href='index_rightluntan.php?chakan=".$rows->id."'>".$rows->title."</a></td><td class='td6'><span class='luntan07'>".$rows->addusername."</span><br />".$rows->addtime."</td><td class='td7'>".$j."</td><td class='td8'>".$huifu->addusername."<br />".$huifu->addtime."</td></tr>";
					}while($rows=mysql_fetch_object($res));
					
					$data.="<tr class='biaoti4'><td>页次：".$page."/".$page_count."页&nbsp;&nbsp;&nbsp;&nbsp;共有".$message_count."条记录</td><td>";
					if($page!=1){
					 if($page_count>=3)
				     	$data.="<a href='index_rightluntan.php?page=".($page-1)."'>上一页</a>&nbsp;";
							else
						$data.="<a href='index_rightluntan.php?page=".($page-1)."'>上一页</a>&nbsp;</td>";
							}
					 if($page<$page_count){
						$data.="<a href='index_rightluntan.php?page=".($page+1)."'>下一页</a></td></tr>";
						}
						
						}
				    else $data="<tr class='luntan05'><td colspan='4'>暂无</td></tr>";
				 return $data;
				 }
	
function a_array_unique($array)//写的比较好
{
   $out = array();
   foreach ($array as $key=>$value) {
       if (!in_array($value, $out))
{
           $out[$key] = $value;
       }
   }
   return $out;
} 




 ?>