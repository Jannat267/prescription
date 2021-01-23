<?php
error_reporting(0);
require_Once 'config.php';
 if (isset($_GET['ok'])) {
       	 	$id=$_GET['id'];
       	 	$result = $db->query("SELECT* FROM doctor WHERE id = $id ") or die($db->error);
			if ($result) {
				$row = $result->fetch_assoc();
		 $name = $row['doctor_name'];
		 $designation=$row['designation'];
		 $address = $row['doctor_address'];
		 $email = $row['email'];
		}
		else
		{
			echo "Id not found";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@media screen{
      body {
                width: 838px;
                height: 1000px;
                padding:30px;
                font-family: sans-serif;
                margin: auto;
                border: 1px solid black;
        
            }
            ul{
         display: inline-block;
         list-style-type: none;
         float: left;
         }
         li{
          list-style-type: none;
         }
         img {
         height: 80px;
         }
         .hospital{
          color: #045DA7;
         }
         .id{
          width: 35px;
         }
         .topline{
          margin-top: 10px;
          border-bottom: 3px solid #045DA7;
          
         }
         .left
         {
          margin-top: 20px;
          width: 30%;
          height: 70%;
          border-right: 3px solid #045DA7;
  
         }
         .right{
          width: 60%;
          height: 80%;
         }
         
          .sig{
            margin-left: 20px;
          }
          .sigLine{
            background-color:  #045DA7;
            height: 1px;
            width: 60%;
            margin-top: 30px;


          }
          .footer{
            margin-top: 760px;
          }
          .btn {
            padding: 8px;
            margin:15px;
            margin-top: 50px;
          }

      }
      @media  print{
          body {
                width: 838px;
                height: 1000px;
                padding:30px;
                font-family: sans-serif;
                margin: auto;
                
        
            }
            ul{
         display: inline-block;
         list-style-type: none;
         float: left;
         }
         li{
         	list-style-type: none;
         }
         img {
         height: 80px;
         }
         .hospital{
         	color: #045DA7;
         }
         .id{
         	width: 35px;
         }
         .topline{
          margin-top: 10px;
          border-bottom: 3px solid #045DA7; 
         }
         .left
         {
         	margin-top: 20px;
         	width: 30%;
         	height: 70%;
         	border-right: 3px solid #045DA7;
  
         }
         .right{
         	width: 60%;
         	height: 80%;
         }
         .id_section{
         		display: none;
         	}
         	.sig{
         		margin-left: 20px;
         	}
         	.sigLine{
         		background-color:  #045DA7;
         		height: 1px;
         		width: 60%;
         		margin-top: 30px;


         	}
         	.footer{
         		margin-top: 760px;
         	}
          .btn{
            display: none;
          }
     }
       
	</style>
	 
</head>
<body>

	<div id="topbar" style="width: 100%; height: 100px; background-color:white">
		<li>
        <ul class="img">
         <img class="" src="doctor.jpg"> 
      </ul>
       <ul class="hospital">
       	 <h1>Bangladesh Central Hospital</h1> 
       	 <li>

       	<?php 
		 echo $name; ?> 
		 <br> 
		 <?php 
		 echo $designation; ?> 
		 <br> 
		 <?php echo $address; ?>
		 <br>  
		 <?php echo $email; ?>
       </li>
       </ul>
   </li>

  
       <li>
       	<ul></ul>
       		<ul class="id_section"> Doctors id : 
       	<form method="GET">	<input type="number" name="id" class="id"><input type="submit" name="ok" value="ok">
       	</form> 
       </ul>
       </li>
       
      

	</div>
	<br><br><br><br>
	<div class="topline"> </div>
 
 	<ul class="left"> <li class="footer">
    <div class="sigLine"></div>
    <br>
		<i class="sig"><b> signature</b> </i> 
		
	</li></ul>
	<ul class="right">
		
	</ul>

	

</body>
<a href="index.php" ><button class="btn">Home</button></a>
<button onclick="window.print()" class="btn"> print</button>
</html>
