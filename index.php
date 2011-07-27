<?php
	$connect	= mysql_connect("localhost", "root", "") or die(mysql_error());
	$select_db	= mysql_select_db("sheco", $connect) or die(mysql_error());
?>
<html>
<head></head>
<body>
	<div>
		<?php 
			$query = mysql_query("select division_id, division_name from ms_division") or die(mysql_error());
			while($row = mysql_fetch_array($query))
			{
		?>
        		<table>
                	<thead>
                    	<tr>
                        	<td>Division Id</td>
                            <td>Division Name</td>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td><?php echo $row['division_id'];?></td>
                            <td><?php echo $row['division_name'];?></td>
                        </tr>
                    </tbody>
                </table>
        <?php
			}
		?>
	</div>
</body>
</html>

