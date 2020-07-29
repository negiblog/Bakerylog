<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
<style>
*{
margin:0;
padding:0;
box-sizing: border-box;

font-family: 'Squada One', cursive;	
	
}
.main-div{
	width: 100%;
	height: 100vh;
	position:relative;
}
.box
{
width: 400px;
position: relative;
top:50%;
left: 50%;
transform: translate(-50%,-50%);
padding:50px;
background: rgba(0,0,0,0.8);
border-radius:10px;	
	
	
}
.box h1{ 
margin-bottom: 30px;
color: #fff;
text-align:center;
text-transform: capitalize;

}
.inputBox
{
	position: relative;
}
.box .inputBox input{
width: 100%;
padding: 10px;
font-size:16px;
color:#fff;
letter-spacing: 1px;
margin-bottom:30px;
border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline:none;	
}
.box .inputBox label{
position: absolute;
top:0;
left:0;
letter-spacing: 1px;
padding: 10px 0;
font-size:16px;

color:#fff;
transition:0.5s;
}
.box .inputBox input:focus ~label,
.box .inputBox input:valid ~label{
top:-20px;
left: 0;
color:#0F0;
font-size:16px;	
}
.box input[type="submit"]{
	background:transparent;
	border:none;
	outline:none;
	color:#fff;
	background: #03a9f4;
	padding: 8px 16px;
	border-radius: 5px;
font-size:16px;
}
</style>
</head>

<body>
<div class="main-div">
<div class="box">
<h1>Login form</h1>
<form method="post" action="1.html">
<div class="inputBox">
<input type="text" name="username" autocomplete="off" required />
<label>Username</label>
</div>
<div class="inputBox">
<input type="password" name="password" autocomplete="off" required />
<label>Password</label>
</div>
<input  type="submit" name="" value="login" />
</form>

</body>
</html>