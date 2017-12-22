<?php
$con = mysqli_connect("localhost", "temp", "nk304704");
if(!$con){
  die('Could not connect: ' . mysqli_error);
} else {
  mysqli_select_db($con, "project");
  $sql_display = "SELECT * FROM community";

  $result = mysqli_query($con, $sql_display);

echo "<form name=\"acview\">";
echo "<input type=\"hidden\" name=\"acvalue\"/>";
while($row = mysqli_fetch_array($result)){
   echo "<a href=\"javascript:go('".$row['number']."');\">".$row['title']."</a><br/>";
}
echo "</form>";
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
</head>
<body>
  <div id="summernote"><p>Hello Summernote</p></div>
  <script>
    $(document).ready(function() {
      var markupStr = 'hello world';
      $('#summernote').summernote('code', markupStr);
    });
    function go(to_send) {
      var f=document.acview;
      f.acvalue.value=to_send;
      f.action="community_view_admin.php";
      f.method="post";
      f.submit();
    }

    function hello(){
      var getcontent = $('#summernote').summernote('code');
      var ff=document.adview;
      ff.advalue.value=getcontent;
      ff.action="community_upload_admin.php";
      ff.method="post";
      ff.submit();
    }
  </script>
  <form name="adview">
  <input type="hidden" name="advalue"/>
  <table>
  <tr> <td>Title</td>
  <td><input type='text' name='title'/></td></tr>
  <tr> <td>Author</td>
  <td><input type='text' name='writer'/></td></tr>
  <tr> <td>Date</td>
  <td><input type='text' name='date'/></td></tr>
  <tr> <td colspan = 2>
  <a href="javascript:hello();">Submit</a><br/>
  </table>
  </form>
 
</body>
</html>