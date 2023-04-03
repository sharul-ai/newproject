<!DOCTYPE html>
<html>
<style>

.button {border-radius: 40%;}{
    background-color: pink; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.boxed {
  border: 2px solid skyblue ;
  padding: 50px;
  margin: 50px;
}

.item img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}


</style>
<header>
<center>
<img src="ictpattern.png"style="width:1350px;height:100px;" style="float:right;" />
<img src="spict.png"style="width:300px;height:150px;" style="float:left;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="ictimages.jpeg"style="width:300px;height:150px;" style="float:right;" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="logoPoliteknik.png"style="width:300px;height:150px;" style="float:right;" /><br>
</center>
<div class="item">
  <img src="wifi2u.jpg" onclick="window.location.href='studentWifiForm.php'"alt="pepsi" width="180" height="100"align="right">
  
  <div class="item-overlay top"></div>
</div>


<br>
<br>
<br>
<br>
<br>

</header>

<div style="text-align:center">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="asetict.png"style="width:350px;height:200px;" style="float:right;" />

<p><a href="permohonan.php">Belum mempunyai akaun?Daftar sekarang!</a></p>

		<form name="form2" method="post" action="checkuserLogin.php">
			<tr>
				<tr>
<td><span style="color:black">Nama Pengguna</td><td>:<input type="text" name="emel" id="user_id" required="required"/></td> <br /></tr>
<tr><br>
<td><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kata Laluan</td><td>:<input type="password" name="password" id="password" required="required"/><br /></tr>
<tr>
<br>
			<tr> <td colspan="2"> <button class="button button" > Log Masuk</button>&nbsp;&nbsp;&nbsp;
		
			
			<tr>
			</tr>
			
		</form>
	</table>

	<br><br>
	<center>

</center>
<center>
<footer>
<img src="ictpattern.png"style="width:1350px;height:100px;" style="float:right;" />
</footer>
</body>
</html>