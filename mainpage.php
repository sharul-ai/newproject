<!DOCTYPE html>
<html>
<head>
<style>


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: skyblue;
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
    background-color: aqua;
}
footer {
    background-color:skyblue;
    color:white;
    clear:both;
    text-align:center;
    padding:10px;
}
.button {
    background-color: skyblue; 
	border-radius:0%;
    border: none;
    color: white;
    padding: 6px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
</head>
<body>
<img src="banner.jpg"style="width:1350px;height:220px;" style="float:center;" />
<ul>
  <li><a class="active" href="#home">Laman Utama</a></li>
  <li><a href="permohonanAset.php">Permohonan Peminjaman Aset ICT </a></li>
  <li><a href="aduanKerosakan.php">Aduan Kerosakan Aset ICT</a></li>
</ul>

<form name="MainPage.html" method="post" action="logkeluar.php">
     <button class="button button" type="submit"style="float:right;" />Log keluar</button>

</form>		
<script type="text/javascript">					
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

today = dd + '/' + mm + '/' + yyyy;
document.write(today);
</script>
<br>
<script type="text/javascript">
    var dCurrentTime = new Date()
    var nCurrentHour = dCurrentTime.getHours()
    var nCurrentMinute = dCurrentTime.getMinutes()
 
    if (nCurrentHour < 10)
        nCurrentHour = "0" + nCurrentHour
 
    if (nCurrentMinute < 10)
        nCurrentMinute = "0" + nCurrentMinute
 
    document.write("Current Time is: " + nCurrentHour + ":" + nCurrentMinute+"<br/>")
</script>

<br>
<br><br><br><br>

<center>
<img src="stickypages1.jpg"style="width:450px;height:400px;" style="float:left;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="stickypages2.jpg"style="width:450px;height:400px;" style="float:right;" />

</center>
<br>
<center>
<img src="spict.png"style="width:150px;height:80px;" style="float:left;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="spaict.png"style="width:150px;height:80px;" style="float:right;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="ictimages.jpeg"style="width:150px;height:80px;" style="float:right;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="logoPoliteknik.png"style="width:150px;height:80px;" style="float:right;" />
</center>
<footer>

<h2><i><font size="2" <font color="black">HakCipta Terpelihara &copy ictpjk@2017  </font>

</footer>
</center>
</body>
</html>
