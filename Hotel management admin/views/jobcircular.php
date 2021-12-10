<html>
<head>
	<title>jobcircular</title>

  <script type="text/javascript">

        function validate(){

           var name= document.forms["myForm"]["fname"].value;
		   

  if (name == "") {

    alert("Name must be filled out");

    return false;

  }
    </script>


</head>
<body>
<form name="myForm" action="../views/home.php" onsubmit="return validate()" method="post">
		<fieldset>
			
			<table  width="100%" height="100%" border="0" cellpadding="5"
			bgcolor="Orange">
			<tr>
				<td align="center" valign="top">
					<legend><h1><font face="American Captain" size="10" color="Purple">We are hiring !</font></h1></legend>
			<table width="400" bordercolor="Orange" border="4" cellspacing="4" cellpadding="6">

            <table width="100%" bordercolor="purple" border="4" cellspacing="4" cellpadding="6">
    <tr>
      <td>Register Yourself!</td>
      <td></td>
    </tr>
    <tr>
      <td>First Name</td>
      <td><input type="text" name="fname" maxlegth="50"/></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><input type="text" name="lname" maxlegth="50"/></td>
    </tr>
    <tr>
      <td>Position</td>
      <td>
        <select name="position">
          <option value="AC">Manager</option>
          <option value="RE">Receptionist</option>
          <option value="SU">Admin</option>
          <option value="TG">Tour Guide</option>
          <option value="CL">Cleaner</option>
          <option value="DV">Driver</option>
          
        </select>
    </td>
    </tr>
    <tr>
      <td>Experience Level</td>
      <td>
        <select name="experience">
          <option value="EL">Entry Level</option>
          <option value="RE">Some Experienced</option>
          <option value="VE">Very Experienced</option>
         
        </select>
      </td>
    </tr>
    <tr>
      <td>Job type</td>
      <td>
        <input type="checkbox" name="ft" />Full Time
        <input type="checkbox" name="pt" />Part Time
        <input type="checkbox" name="ct" />Contract

      </td>
    </tr>
    <tr>
      <td>Current Employment Status</td>
      <td>
        <input type="radio" name="estatus" value="employed" />Employed
        <input type="radio" name="estatus" value="Unemployed" />Unemployed
        <input type="radio" name="estatus" value="student" />Student
      </td>
    </tr>
    <tr>
      <td>Marital Status</td>
      <td>
        <input type="radio" name="mstatus" value="married" />Married
        <input type="radio" name="mstatus" value="Unmarried" />Unmarried
        <input type="radio" name="mstatus" value="single" />Single
      </td>
    </tr>
    <tr>
      <td>Additional Comments</td>
      <td>
        <textarea name="comments" cols="45" rows="5"></textarea>
      </td>
    </tr>
    <tr>
      <td> 
      <form method="POST" action="fileupload.php" enctype="multipart/form-data">
			<fieldset>
				Upload Your CV here: <input type="file" name="myfile"/>
                </td>
                <td>
				<input type="submit" name="submit" value="Submit"/>
                <input type="reset" name="reset" value="Reset" />
                </td>
			</fieldset>
		</form>
      
      
    </tr>
  </table>
</form>

<center>
		<a href="home.php"><font face="Satisfy" size ="5" color="Blue">Back</font> </a>&nbsp;
    </center>