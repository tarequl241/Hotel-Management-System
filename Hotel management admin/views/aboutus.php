<?php 
	require_once('../model/usersModel.php');
	$result = getaboutus();
	$count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>About Us</title>
    <br><br><br>
    <table width="50%" align="center" height="100" border="0" cellspacing="1" cellpadding="1">
                <tr>
                    <td height="72" align="center" valign="top"> 
                        <table width="100%" border="0" cellspacing="1" cellpadding="1"background="../image/new.jpg">
                            <tr>
                                <td width="100%" align="center"><font face="Lucida Sans Unicode" color="black" size="4">About Us<br/>
                                </td>
                            </tr>
                            </tr>
                <?php while($data = mysqli_fetch_assoc($result)) { ?>
				<tr>
					
					<td align="center"><?=$data['about']?></td>

		</tr>
		

	<?php } ?>
                        </table>
                    
                
    </table>
    <center>
                <br><br>
						<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;  
		
						</center>
            
</body>
</html>