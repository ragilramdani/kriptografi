<?php session_start();
$kalimat = $_GET["kata"]; // method post dan get
// $key = $_GET["key"]; // method post dan get
for($i=0;$i<strlen($kalimat);$i++)
{
$kode[$i]=ord($kalimat[$i]); //rubah ASCII ke desimal
$b[$i]=($kode[$i] + 3 ) % 256; //proses enkripsi
$c[$i]=chr($b[$i]); //rubah desimal ke ASCII

}
echo "<br>";
echo "<br>";
echo "<br>";
echo "
 <center>
 <p> HASIL KRIPTOGRAFI </p>

 <form method ='POST'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
  <td> KALIMAT ASLI </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'text' name = 'kata' value= '".$kalimat."'/> </td>
  </tr>
  </center>
</table>
</form>
</body>
</html>
";
$hsl = '';
for ($i=0;$i<strlen($kalimat);$i++)
$hsl = $hsl . $c[$i];
echo "
<center>
<form method ='POST'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'> 
 <tr>
  <td> HASIL ENKRIPSI </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'key' value= '".$hsl."'/> </td>
  </tr>
   </center>
</table>
</form>
</body>
</html>
<a href = 'index.php'> Kembali </a>
  ";
?>