<html>
    <head>
        <link rel="stylesheet" href="searchbar.css">
       
    </head>
    <body >
<div id="searchbar">
           
           <form method="GET" >
               
               <label>From</label><br>
               <input type="text" id="fromwhere" name="sourcee" list="city" required><br>
               <label>TO</label><br>
               <input type="text" id="towhere" name="destinatione" list="city"required><br>
<label>Date</label><br>
<input type="date" id="day" name="when" required><br>
<input type="submit" id="search" name="submit" value="search">
<?php include'datalist.php';?>
 </form>
</body>
</div>
<?php
if(isset($_GET["submit"]))
   {
$source=$_GET["sourcee"];
$destination=$_GET["destinatione"];
$date=$_GET["when"];

  echo" <div id='searchresult'>
   ";
  
include 'databaseconnect.php';
require 'routesindex.php';
$sql="SELECT * FROM busroutes where source='$source'and destination='$destination'and datee='$date'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
 while($row=$result->fetch_assoc())
    {
    require 'businfo.php';
    }
    }


echo"<center><b><script>
if(document.getElementById('searchresult').value=='');

{
    document.write('Sorry!!no other  match Found');
    
}
if (typeof window.history.pushState == 'function') {
    window.history.pushState ( {}, document.title, 'main.php'); 
  }
</script></b></center>
";

echo"</div>";
   }
  
?>


   </html>