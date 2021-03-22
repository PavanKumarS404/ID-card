<?php
 session_start();
if(empty($_SESSION['username'])):
    header('Location:login.php');
endif;
?>
<!doctype html>
<html>
<head><title>NHCE ID card form </title>
<style type ="text/css">
*{
   margin:0;
   padding:0;
}
body{
background-image:url(nhce.png);
background-position:center;
background-size: cover;
font-family:sans-serif;
margin-top:40px;
}
 .regform{
	width:800px;
	background-color:rgb(0,0,0,0.6);
	margin:auto;
	color:#FFFFFF;
	padding:10px 0px 10px 0px;
	text-align:center;
	border-radius:15px 15px 0px 0px;
 }
 .main{
		background-color:rgb(0,0,0,0.5);
		width:800px;
		margin:auto;
		}
		form{
		padding:10px;
		}
		
#name{
	width :100%;
	height:100px;
	}
.name{
	margin-left:25px;
	margin-top:30px;
	width:125px;
	color:white;
	font-size:18px;
	font-weight=700;
	}
.firstname{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
    }
.lastname{
	position:relative;
	left:170px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 20px;
	font-size:16px;
	color:#555;
	}
	.firstlabel{
					position:relative;
					color:#E5E5E5;
					text-transform:capitalize;
					font-size:14px;
					left:120px;
					top:-10px;
					}
	.lastlabel{
					position:relative;
					color:#E5E5E5;
					text-transform:capitalize;
					font-size:14px;
					left:90px;
					top:-10px;
					}
						
.USN{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}
.Phone{position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}
.Address{
position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}	
.DOB{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:480px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	}
	
	
	.option{
	position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	width:532px;
	height: 40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
	color:#555;
	outline:none;
	overflow:hidden;
	}
	.option option{
					font-size:20px;
					}
					
	
	
	#student{
				margin-left:25px;
				color:white;
				font-size:20px;
				}
	.radio{
			display:inline-block;
			padding-right:70px;
			font-size:15px;
			margin-left:25px;
			margin-top:15px;
			color:white;
			}
	.radio input{
	width:20px;
	height:20px;
	border-radius:50%;
	cursor:pointer;
	outline:none;
	}
	button{
			background-color:#3BAF9F;
			display;block;
			margin:20px 0px 0px 20px;
			text-align:center;
			border-radius:12px;
			border:2px solid #366473;
			padding: 14px 110px;
			outline:none;
			color:white;
			cursor:pointer;
			transition:0.25px;
			}
		button:hover{
						background-color:#5390FS;
						}
						
.Semester{position:relative;
	left:200px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 22px;
	font-size:16px;
}

.Section{position:relative;
	left:170px;
	top:-37px;
	line-height:40px;
	border-radius:6px;
	padding:0 20px;
	font-size:16px;
	color:#555;
}

.firstlab{position:relative;
					color:#E5E5E5;
					text-transform:capitalize;
					font-size:14px;
					left:150px;
					top:-8px;
}

.secondlab{position:relative;
					color:#E5E5E5;
					text-transform:capitalize;
					font-size:14px;
					left:100px;
					top:-8px;
}
						
</style>
</head>
<body>
<div class="regform"><h1>Enter Details on ID</h1></div>
<div class="main">
<form action="connect1.php" method="post" enctype="multipart/form-data">
<div id ="name">
<h2 class="name">Name</h2>
<input class ="firstname" type="text" name="first_name"<br>
<label class="firstlabel">first name</label>
<input class ="lastname" type="text" name="last_name"<br>
<label class="lastlabel">last name</label>
</div>

  <h2 class ="name"> USN </h2>
  <input class ="USN" type="text" name ="USN">
  
   <h2 class ="name"> Phone </h2>
  <input class =" Phone" type="text" name ="Phone">
  
     <h2 class ="name"> Address </h2>
  <input class ="Address" type="text" name ="Address">
  
  
  <h2 class ="name">DOB</h2>
  <input class="DOB" type="date" name ="DOB">
  
  <h2 id="student"> Gender </h2>
  
  <label class ="radio">
  <input class="radio-one" type ="radio"  name ="">
  <span class= "checkmark"></span>
  Male
 </label> 
 <label class ="radio">
  <input class="radio-two" type="radio" name="">
  <span class="checkmark"></span>
  Female
  </label>

 
  <h2 class ="name"> Department</h2>
  <select class ="option" name= "Department">
  <option disabled= "disabled" selected ="selected">--Select Department--</option>
  <option> Information Science</option>
  <option> Computer Science</option>
  <option> Civil Engineer</option>
  <option> Mechanical Engineer</option>
  <option> Electrical Engineer</option>
  </select>
  
  <h2 class="name">Class</h2>
  <input class ="Semester" type="text"name ="Sem">
  <label class="firstlab">Sem</label>
  <input class="Section" type="text" name="Sec">
  <label class="secondlab">Section</label>
<input type = "file" name="image" id="image"/><br>
 
<button type: "submit"> Submit </button>
 
</form>
</div>
</html>