<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"insert into guides(gname,place,amnt,address,phone,email,des)values('$gname','$place','$amnt','$address','$phone','$email','$des')");
if($qry)
{

echo "<script>alert('Data Save');</script>";
}
else
{
echo "<script>alert('Data Not Save');</script>";

}
}

?>
<html>
<title>Tours & Travels</title>
<style>
#navbar {
  padding: 25px;
  background:#00ffff;
  background-size: 1420px  100px;
  text-align:center;
  text-decoration:blink;
  text-color:#4d4d00;
   font-family: Arial;
   font-size:35px;
}

p
{
	color:#4d4d00;
	text-align: center;
	text-transform: uppercase;
	 font-size:20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #888844;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}

#footer {
  border: 2px solid #888844;
  padding: 45px;
  background: #888844;
  background-repeat: no-repeat;
  background-size: 1420px  100px;
  border-radius:10px;
  text-align:center;
  text-decoration:blink;
   font-family: Arial;
   font-size:15px;
}
#bg1 {

  padding:150px;
  background:url("images/4.png");
  background-repeat: no-repeat;  background-size: 100%  200px;
  border-radius:5px;
   border-radius:10px;
   font-size:35px;
}

</style>
</head>
<div id="navbar"><p>Tours And Travels </p></div>
<ul>
	 <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	  <li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
	  <li><a class="active" href="adminhome.php">Home Page</a></li>
   <li><a href="#">&nbsp;</a></li>
 <li><a href="transopts.php">Add Transopts</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="viewu.php">User Details</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="viewp.php">Packages Details</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="booking.php">Booking Details</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="index.php">LogOut</a></li>
</ul>
<div id="bg1"> </div>
<form id="form1" name="form1" method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Add Guides</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>Guide Name </strong></span></td>
           <td><label>
             <input name="gname" type="text" id="gname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Amount </strong></span></td>
           <td><label>
             <input name="amnt" type="text" id="amnt" />
           </label></td>
         </tr>
		  <tr>
           <td height="44" align="center"><span class="style2"><strong>Place</strong></span></td>
           <td><label>
             <input name="place" type="text" id="place" />
           </label></td>
         </tr>
		  <tr>
           <td height="44" align="center"><span class="style2"><strong>Address</strong></span></td>
           <td><label>
             <input name="address" type="text" id="address" />
           </label></td>
         </tr>
		 
		  <tr>
           <td height="44" align="center"><span class="style2"><strong>Email</strong></span></td>
           <td><label>
            <input name="email" type="text" id="email" />
           </label></td>
         </tr>
		 
		  <tr>
           <td height="44" align="center"><span class="style2"><strong>Phone</strong></span></td>
           <td><label>
             <input name="phone" type="text" id="phone" />
           </label></td>
         </tr>	
		  <tr>
           <td height="44" align="center"><span class="style2"><strong>Description</strong></span></td>
           <td><label>
             <textarea name="des" id="des" ></textarea>
           </label></td>
         </tr>	 		 
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="add" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
  </table>
</form>
<div> &nbsp;</div>
<div id="footer"> copyrights & designedby@Tours & travels</div>