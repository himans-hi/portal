<?php

if(!isset($_COOKIE["type"])&& !isset($_COOKIE["user"]))
{
	header("Location:login2.php");
}
if(($_COOKIE['type']=="auth"))
{	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
.form_table td {
    padding: 2px 173px;
}
</style>

    <title>
	Knowledge Management Portal
</title><link href="vendor/css/style.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.css" /><link rel="stylesheet" type="text/css" href="vendor/css/font-awesome.css" />


<script src="jquery/jquery-1.11.3.min.js"></script>
<script src="jquery/ui/1.11.4/jquery-ui.js"></script> 
 <script src="vendor/js/kmp.js"></script>  
<script type="text/javascript" src="vendor/js/j1.js"></script>

<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/redmond/jquery-ui.css" />
<style type="text/css">
    .web_dialog
    {
        display: block;
        position: fixed;
        width: 380px;
        height: 210px;
        top: 50%;
        left: 50%;
        margin-left: -190px;
        margin-top: -130px;
        background-color: #ffffff; /*border: 1px solid #5bc0de;
        padding: 0px;*/
        z-index: 102;
        font-family: Arial, Verdana, Helvetica, sans-serif;
        font-size: 10pt;
    }
    .web_dialog_title
    {
        border-bottom: solid 2px #337ab7;
        padding: 4px;
        color: White;
        font-weight: normal;
        font-family: Arial, Verdana, Helvetica, sans-serif;
        font-size: 17px;
    }
</style>
<style type="text/css">
    .ui-helper-hidden-accessible
    {
        display: none;
        visibility: hidden;
    }
    .ui-autocomplete
    {
        list-style: none;
        margin: 0;
        z-index: 9999 !important;
        padding: 0;
        background: #fafafa !important;
        width: 420px;
        max-height: 400px;
        overflow: auto;
        border: 1px solid #ddd;
    }
    .ui-autocomplete li
    {
        list-style: none;
        margin: 0;
        cursor: pointer;
        padding: 5px !important;
        border-bottom: 1px solid #ddd;
    }
    .ui-autocomplete li:hover
    {
        background: #f4f4f4 !important;
    }
    .ui-autocomplete li a
    {
        font-family: Verdana;
        color: #900;
    }
    .ui-autocomplete li:hover a
    {
        color: green;
        font-weight: bold;
    }
    .ui-corner-all
    {
        color: #337ab7;
    }
    .right_bar .user .user_image img
    {
        border-radius: 28px !important;
        height: 55px !important;
        margin: 21px 0px 0 0 !important;
        position: relative !important;
        width: 58px !important;
    }
    
    
    .right_bar .user .user_image:after
    {
        content: '';
        width: 23px;
        height: 23px !important;
        background: url();
        background-size: 80% !important;
        position: absolute;
        bottom: 5px;
        right: 20px;
        color: #D8D4D8;
        font-size: 24px;
    }
    .right_bar .user .user_image
    {
        position: relative;
    }
</style>

<!-- <script type='text/javascript'>
    $(document).ready(function () {
        var value = $('#header_lbl_atdstatus').text();
        var myID = $('.right_bar .user .user_image img').attr('id');
        if (value == 'Absent') {
            $("#divPic").addClass("user_image user_imageSmall");
        }
        else {
            $("#divPic").addClass("user_image user_imagePresentSmall");

        }

    });
</script> -->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script>
  function REG_FORM()                                    
 { 
  //  var id = document.forms["RegForm"]["id"]; 
    var fname1 = document.forms["RegForm"]["fname"]; 
    var lname1 = document.forms["RegForm"]["lname"]; 	
    var department = document.forms["RegForm"]["Dept"];    
    var DepartmentLocation = document.forms["RegForm"]["DeptLoc"];  
    var contact =  document.forms["RegForm"]["Contact"];  
	var Email = document.forms["RegForm"]["email"];
	var Marry = document.forms["RegForm"]["marry"];
    var Band = document.forms["RegForm"]["band"];
    var MealFacility = document.forms["RegForm"]["mealfacility"];  
	var CabFacility = document.forms["RegForm"]["cabfacility"];   
//	var City = document.forms["RegForm"]["city"]; 
    var address = document.forms["RegForm"]["address"]; 
    var Pincode = document.forms["RegForm"]["pincode"];
//	var file = document.forms["RegForm"]["upload[]"];
//	var work_status = document.forms["RegForm"]["work_status"]; 	
//	var status = document.forms["RegForm"]["status"];
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

   
    if (fname1.value == "")                                  
    { 
         
        window.alert("Please enter your first name."); 
        fname1.focus(); 
        return false; 
    } 
	
	if(!isNaN(fname1.value))
    {
		
       window.alert("Please Enter Only Characters");
       fname1.focus();
       return false;
    }
	
	if(fname1.value.length < 3 || fname1.value.length >15)
	{ 

        window.alert("Please enter atleast 3 characters."); 
        fname1.focus(); 
        return false; 
    } 
	
	if (lname1.value == "")                                  
    { 

        window.alert("Please enter last name."); 
        lname1.focus(); 
        return false; 
    } 
	
	if(!isNaN(lname1.value))
    {
		
       window.alert("Please Enter Only Characters");
       lname1.focus();
       return false;
    }

   if(lname1.value.length < 4 || lname1.value.length >15)
	{ 

        window.alert("Please enter atleast 3 characters."); 
        lname1.focus(); 
        return false; 
    } 

  if(department.value == "")
   {
	   
   window.alert("Please enter your valid dept."); 
        department.focus(); 
       return false; 
  }
    
   if (DepartmentLocation.value == "")                                   
    { 
        window.alert("Please enter your valid dept location."); 
        DepartmentLocation.focus(); 
       return false; 
   }
   if (isNaN(contact.value))                                   
    { 
        window.alert("Please enter only numbers."); 
        contact.focus(); 
       return false; 
   }
   if(contact.value.length!=10)
   {
	   
        window.alert("Please enter valid length."); 
        contact.focus(); 
       return false; 
   }
   if((contact.value.charAt(0)!=9) && (contact.value.charAt(0)!=8) && (contact.value.charAt(0)!=7))
   {
	   window.alert("mobile number must be start with 9,8 and 7");
	   contact.focus();
	   return false;
   }
   
   if (Email.value == "")                                   
    { 
        window.alert("Please enter your email."); 
        Email.focus(); 
       return false; 
   }
       
	if(!mailformat.test(Email.value))
	{
	window.alert("please provide a valid email address");
	Email.focus();
	return false;
	}
    
	if (Marry.value == "")                                    
    { 
	var formValid=false;
	var i=0;
	while(!formValid && i< Marry.length)
	{
	if (Marry[i].checked)formValid=true;
	i++;
	}
        if(!formValid)alert("please enter martial status!");
       return formValid;			
   }
   
    if(Band.value == "")
	{
		 window.alert("Please enter your salary band."); 
        Band.focus(); 
       return false; 
   }
     
   if (MealFacility.value == "")                                    
    { 
	var formValid=false;
	var i=0;
	while(!formValid && i< MealFacility.length)
	{
	if (MealFacility[i].checked)formValid=true;
	i++;
	}
        if(!formValid)alert("please enter value of meal facility!");
       return formValid;			
   }
   
   if (CabFacility.value == "")                               
    { 
	var formValid=false;
	var i=0;
	while(!formValid && i< CabFacility.length)
	{
	if (CabFacility[i].checked)formValid=true;
	i++;
	}
        if(!formValid)alert("please enter value of cab facility!");
       return formValid;		
   	  
   }

    if (address.value == "")                                
    { 
        window.alert("Please enter your address."); 
        address.focus(); 
       return false; 
   }
	
    if (Pincode.value == "")                                   
    { 
        window.alert("Please enter your PinCode."); 
        Pincode.focus(); 
       return false; 
   }
   
   if(isNaN(Pincode.value))                                   
    { 
        window.alert("Please enter only number.."); 
        Pincode.focus(); 
       return false; 
   }
   
   if (Pincode.value.length < 6)                                   
    { 
        window.alert("Pincode must be valid number"); 
        Pincode.focus(); 
       return false; 
    }
    return true; 
  }
  </script>
  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function(){   
   $('#pwd').blur(function(){
	  
     var pwd = $(this).val();
//	 alert(pwd);
	
     $.ajax({
      url:'check2.php',
      method:"POST",
      data:{pwd:pwd},
      success:function(data)
      {
       if(data != '0')
       {
		//   alert('h1');
		   // $('#fname').removeClass('<span class="text-danger">already exist</span>');
		   // $(this).parent().addClass('<span class="text-danger">already exist</span>');
        $('#password').html('<span class="text-danger">already exist create different  password</span>');
        $('#submit').attr("disabled", true);
       }
       else
       {
		//   alert('h3');
	//	   $('#fname').removeClass('<span class="text-danger">already exist</span>');
        $('#password').html('<span class="text-success">Available</span>');
        $('#submit').attr("disabled", false);
       }
      }
     })
   });
   		
        var value = $('#header_lbl_atdstatus').text();
        var myID = $('.right_bar .user .user_image img').attr('id');
        if (value == 'Absent') {
            $("#divPic").addClass("user_image user_imageSmall");
        }
        else {
            $("#divPic").addClass("user_image user_imagePresentSmall");

        }

	});
  </script>
</head>
<body> 
<?php
// $_COOKIE["page"]= "edit";
  include('include/navbar.php');

  include('config/require.php');
 
  if(isset($_GET['id'])){
   $id = $_GET['id'];

      
   $sql= "select * from students where id=$id" ;
   $result= mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   
  }
  ?>
  
  <form name="RegForm" action="update.php" onsubmit="return REG_FORM()" method="post" enctype="multipart/form-data">
	<div>
	<div class="main" style="width:98%; margin-left:16px;">
		
         
		 
            <div class="main">
            <div class="top_bar">
			                      <h2>
                                        Edit Authentication Form</h2>
                                </div>
              
                   <table cellpadding="2" cellspacing="2" class="form_table" width="100%">                                   
                        <tr height="10"></tr>
                        <tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">First Name</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['Fname'] ?>" name="fname" type="text" class="form-control" placeholder="enter first name" style="width:199px;" />
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Last Name</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['Lname'] ?>" name="lname" type="text" class="form-control" placeholder="enter last name" style="width:199px;" />
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Department</span>
                            </td>
                            <td align="left">
                                <select name="Dept" id="dept" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select Department</option>
									
									<option value="Enterprise&Solutions"
									<?php
if($row['Department']=='Enterprise&Solutions')
{
	echo "selected";
}
?>
>Enterprise&Solutions</option>
									<option value="Finance&Accounts"
									<?php
if($row['Department']=='Finance&Accounts')
{
	echo "selected";
}
?>
>Finance&Accounts</option>
									<option value="HR&Administration"
									<?php
if($row['Department']=='HR&Administration')
{
	echo "selected";
}
?>
>HR&Administration</option>
									
                              	</select>
                            </td>                            
                        </tr>
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">DepartmentLocation</span>
                            </td>
                            <td align="left">
                                <select name="DeptLoc" id="DeptLoc" onchange='CheckColors(this.value);' class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select Department Location</option>	
	<option value="Bangalore"
	<?php
if($row['DepartmentLocation']=='Banglore')
{
	echo "selected";
}
?>
	>Bangalore</option>
	<option value="Bangladesh"
	<?php
if($row['DepartmentLocation']=='Bangladesh')
{
	echo "selected";
}
?>
	>Bangladesh</option>
	<option value="Bihar"
	<?php
if($row['DepartmentLocation']=='Bihar')
{
	echo "selected";
}
?>
	>Bihar</option>
	<option value="Chennai"
	<?php
if($row['DepartmentLocation']=='Chennai')
{
	echo "selected";
}
?>
	>Chennai</option>
	<option value="Dhaka"
	<?php
if($row['DepartmentLocation']=='Dhaka')
{
	echo "selected";
}
?>
	>Dhaka</option>
</select>
                            </td>                               
                        </tr>
						
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Contact</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['contact'] ?>" name="Contact" id="Contact" maxlength="10" type="text" class="form-control" placeholder="enter contact number" style="width:199px;" />
                            </td>                            
                        </tr>
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Email</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['email'] ?>" name="email" type="text" id="email" class="form-control" placeholder="enter email" style="width:199px;" />
								<span id="Email"></span>
                            </td>
                        </tr>
										
						<tr>
                            <td align="left">
                                <span class="text_big_team">Married</span>
                            </td>
                            <td align="left">
                                <input type="radio" name="marry" id="marry" value="single"
								 <?php
	if($row['married']=='single')
	{
		echo "checked";
	}
	?>
                                  />Single&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="radio" name="marry" id="marry" value="married" onchange='Check(this.value);'
								<?php
	if($row['married']=='married')
	{
		echo "checked";
	}
	?> 
	/>Married
                            </td>
                        </tr>
						
					
						
                        <tr>
                            <td align="left">
                                <span class="text_big_team">Password</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['PASSWORD'] ?>" name="pwd" type="text" id="pwd" class="form-control" placeholder="enter password" style="width:199px;" />
                                <span id="password"></span>
                            </td>
                        </tr>
						
						<tr>
                            <td align="left" width="30%">
                                <span class="text_big_team">Band</span>
                            </td>
                            <td align="left">
                                <select name="band" id="band" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:200px;">
									<option value="">Select</option>
	<option value="1"
	<?php
if($row['band']=='1')
{
	echo "selected";
}
?>
	>1</option>
	<option value="2"
	<?php
if($row['band']=='2')
{
	echo "selected";
}
?>
	>2</option>
	<option value="3"
	<?php
if($row['band']=='3')
{
	echo "selected";
}
?>
	>3</option>
	<option value="4"
	<?php
if($row['band']=='4')
{
	echo "selected";
}
?>
	>4</option>
	<option value="5"
	<?php
if($row['band']=='5')
{
	echo "selected";
}
?>
	>5</option>
	</select>
	</td>
    </tr>   
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Meal Facility</span>
                            </td>
                            <td align="left">
                                <input type="radio" name="mealfacility" id="mealfacility" value="yes"
								 <?php
	if($row['MealFacility']=='yes')
	{
		echo "checked";
	}
	?>
								/>yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="radio" name="mealfacility" id="mealfacility" value="no"
								 <?php
	if($row['MealFacility']=='no')
	{
		echo "checked";
	}
	?>
								/>no
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Cab Facility</span>
                            </td>
                            <td align="left">
                                <input type="radio" name="cabfacility" id="cabfacility"  value="yes"
 <?php
	if($row['CabFacility']=='yes')
	{
		echo "checked";
	}
	?>
								/>yes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="radio" name="cabfacility" id="cabfacility" value="no" 
								 <?php
	if($row['CabFacility']=='no')
	{
		echo "checked";
	}
	?>			
								/>no
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Current Address</span>
                            </td>
                            <td align="left">
                                <textarea name="address" rows="6" type="text" id="address" class="form-control" placeholder="enter address" style="width:199px;" /><?php echo $row['current_address'] ?></textarea>
                            </td>
                        </tr>
						
						<tr>
                            <td align="left">
                                <span class="text_big_team">Pincode</span>
                            </td>
                            <td align="left">
                                <input value="<?php echo $row['pincode'] ?>" name="pincode" type="text" id="pincode" class="form-control" placeholder="enter pincode" style="width:199px;" />
                            </td>
                        </tr>
						
						
                         <input type='hidden' name='id' value= "<?php echo $row['id'] ?>">
                        
                        <tr>
                            <td></td>
                            <td align="left">
                                <a href="view.php"><button type="button" class="btn btn-secondary">close</button></a>&nbsp&nbsp
 <button type="submit" name="update" value="update" class="btn btn-primary">Save</button></a>&nbsp&nbsp                             
                            </td>
                        </tr>
					
                   <tr>
                            <td colspan="2" align="center">
                                <span id="lb12" class="text_big_team">Fields marked <font color='red'>*</font> are required</span>
                            </td>  
                        </tr>      

                        <tr>
                                <td colspan="2" class="text" 
                                    width="15" height="5">
                                </td>
                            </tr>
                            <tr>
                                <td class="text_footer" align="center"> 
                                     <div class="footer_fix">Copyright &copy;  2020 Spice Digital Limited.</div>


</td>
                             
                            </tr>
                    </table>
                    </div>
                    </div>
                    </div>
</form>
</body>
</html>

<?php
}
else{
	header("Location:login2.php");
}
?>

  