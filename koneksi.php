<?php 
    $conn = mysql_connect('localhost', 'root', '')
		or die('<SCRIPT LANGUAGE="JavaScript">alert(\'Database Server is down, please contact administrator\')</script>');
	mysql_select_db("femifebr_undang");
	
	
	function display_error($var) {
	echo '
			<table border="0" cellpadding="0" cellspacing="0" width="346" height="341">
				<tr>
					<td background="images/error.jpg" style="vertical-align:bottom">
						<div style="float:right">
							<font size="4">'.$var.'</font>
						</div>
					</td>
				</tr>
			</table>
		';
    }

    function db_exec($sql){
        global $conn;
    	if ($result = mysql_query($sql)) {
    		return true;
    	} else {
            echo "Data gagal terinput, silahkan input kembali.";
    	   // echo $sql;
    		return false;
    	}
    }

    function to_array($sql){
        global $conn;
    	if ($result = mysql_query($sql))
    	{
    		$f_count = mysql_num_fields($result);
    		$r_count = mysql_num_rows($result);
    		$hasil = array();
    		$jj = 0;
    		while (mysql_fetch_object($result))
    		{
    			for ($i = 0; $i < $f_count; $i++)
    			{
    				$hasil[$jj][$i] = mysql_result($result, $jj, $i);
    			}
    			$jj++;
    		}
          $hasil[rowsnum] = $jj;
          $hasil[colsnum] = $f_count;
          mysql_free_result($result);
          return $hasil;
    	}
    	//else echo $sql;
       //mysql_close($conn);
    }
    
    
    function get_nama($kode){
        $sql = "select nama from undangan where kode = '".$kode."' ";
        $row = to_array($sql);
        list($_nama) = $row[0];
        
        return $_nama;
         
    }
   
   
    
?>