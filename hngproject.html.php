<!DOCTYPE html>
<html>
<head>
<style>

body {
 margin-bottom:0;
 border-radius:8px;
  background-image: url("hng.jpg");
 
  background-position:center;

  background-color: #cccccc;
 
}
ul {
   list-style-type: none;
   margin: 0;
   padding: 0;
   overflow: hidden;
   background-color:#006666;
      min-height: 20px !important;
 margin-bottom:0;
 border-radius:10px;
 width:100%;
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
#datewrapper{
border:7px  #fff;
width:300px;
height:90px;
margin:80px auto;
margin-bottom:20px
}

#date{
font-size:20px;
color:black;
line-height:3.9em;
font-weight:bold
}

#timewrapper{
border:10px radius #fff;
width:500px;
height:90px;
margin:auto
}

#time{
font-size:35px; 
color:black; 
line-height:2.4em;
font-weight:bold
}

li a:hover {
   background-color: #111;
}
</style>

<script type="text/javascript">
window.onload = setInterval(clock,1000);
function clock(){
    var d = new Date();
    var date = d.getDate();
    var month = d.getMonth();
    var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
    month=montharr[month];
    
    
    var year = d.getFullYear();
    var day = d.getDay();
    var dayarr =["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"];
    day=dayarr[day];
    
    var hour =d.getHours();
   var min = d.getMinutes();
    var sec = d.getSeconds();
    
    document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
    document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
}
</script>
</head>
<body>

<ul>
 <li><a class="active" href="#home">Home</a></li>
 <li><a href="#news">News</a></li>
 <li><a href="#contact">Contact</a></li>
 <li><a href="#about">About</a></li>
</ul>

<br>
<br>
<h1 align="center">HNGInternship 4.0</h1>
<div id="datewrapper"align="center">
    <p id="date"></p>
</div>

<div id="timewrapper"align="center">
    <p id="time"></p>
</div>
</body>
</html>