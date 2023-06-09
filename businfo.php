
<?php
echo"<form action='book.php' method='POST'>";
echo"<div id='businfo'>

<div id='image'>
<input type='text' name='bustype' value='".$row["bustype"]."'disabled>
</div>
<div id='from'>
<input type='text' name='source' value='".$row["source"]."'disabled>
</div>
<div id='to'>
<input type='text' name='destination' value='".$row["destination"]."'disabled>
</div>
<div id='departure'>
<input type='text' name='departuretime' value='".$row["departure"]."'disabled>
</div>
<div id='available'>
<input type='text' name='availableseat' value='".$row["available"]."'disabled>
</div>
<div id='fare'>
<input type='text' name='price' value='".$row["fare"]."'disabled>
</div>
<div id='datee'>
<input type='text' name='date' value='".$row["datee"]."'disabled>
</div>
<div id='bussnumber'>
<input type='text' name='busnumber' value='".$row["busnumber"]."'disabled>
</div>
<input type='hidden' name='hide' value='".$row["id"]."'>
<div id='book'>
<input type='submit' name='bookbtn' value='Book' style='width:100%;height:100%;'>
</div>
</div>
";
echo"</form>"
?>