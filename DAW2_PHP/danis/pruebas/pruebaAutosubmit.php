<?php
$sort = "";
if(isset($_GET["sort"]))
{ $sort = $_GET["sort"]; }
?>
<html>
<head>
<script>
function autoSubmit()
{
    var formObject = document.forms['theForm'];
    formObject.submit();
}
</script>
</head>
<body>
<form name='theForm' id='theForm'>
    <input type="radio" name="sort" <?php if ($sort == 'upload_time') { ?>checked='checked' <?php } ?>value="upload_time" onChange="autoSubmit();" />Recently Uploaded
    <input type="radio" name="sort" <?php if ($sort == 'article') { ?>checked='checked' <?php } ?> value="article" onChange="autoSubmit();" /> Alphabetically
    <input type="radio" name="sort" <?php if ($sort == 'year') { ?>checked='checked' <?php } ?> value="year" onChange="autoSubmit();" /> Most Recent
</form>
</body>
</html>