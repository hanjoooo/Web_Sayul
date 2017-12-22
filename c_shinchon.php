<!DOCTYPE html>
<html>
<head>
  <title>"QnA </title>

  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
  body{
    font-family : "Nanum Gothic", sans-serif;
  }
  table.type04 {
    border-collapse: separate;
    border-spacing: 1px;
    text-align: left;
    line-height: 1.5;
    border-top: 1px solid #ccc;
  margin : 20px 10px;
}
table.type04 th {
    width: 150px;
    padding: 10px;
    font-weight: bold;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
}
table.type04 td {
    width: 350px;
    padding: 10px;
    vertical-align: top;
    border-bottom: 1px solid #ccc;
}
  </style>

  <script type="text/javascript">
    function move(url){
      location.href=url;
    }
    function go(to_send) {
      var f=document.cview;
      f.cvalue.value=to_send;
      f.action="Community_View.php";
      f.method="post";
      f.submit();
    }
  </script>
</head>

<body>

  <table class ="type04" width="1300";>
    <thread>
      <tr>
        <th align ="center" scope="row">Number</th>
        <th align ="center" scope="row">Title</th>
        <th align ="center" scope="row">Author</th>
        <th align ="center" scope="row">Date</th>
      </tr>
    </thread>
    <tbody>
      <?php
        $con = mysqli_connect("localhost", "temp", "nk304704");
        if(!$con){
          die('Could not connect: ' . mysqli_error);
        } else {
          mysqli_select_db($con, "project");
          $sql_display = "SELECT * FROM community";

          $result = mysqli_query($con, $sql_display);

          echo "<form name=\"cview\">";
          echo "<input type=\"hidden\" name=\"cvalue\"/>";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td  align=\"center\">".$row['number']."</td>";
            echo "<td ><a href=\"javascript:go('".$row['number']."');\">".$row['title']."</a></td>";
            echo "<td  align =\"center\">".$row['writer']."</td>";
            echo "<td  align =\"center\">".$row['date']."</td>";
            echo "</tr>";
          }
          echo "</form>";
        }
        mysqli_close($con);
      ?>
    </tbody>
    <tfoot>
      <tr>
        <td scope="row" align="center" colspan="5">1</td>
      </tr>
    </tfoot>

  </body>
</html>