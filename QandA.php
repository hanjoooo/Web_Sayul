<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Q and A </title>

  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
  body{
    font-family : "Nanum Gothic", sans-serif;
  }
  </style>

  <script type="text/javascript">
    function move(url){
      location.href=url;
    }
    function go(to_send) {
      var f=document.qview;
      f.qvalue.value=to_send;
      f.action="Question_View.php";
      f.method="post";
      f.submit();
    }
  </script>
</head>

<body>
  <table class ="bss" width="800" height="150" border="1" style="background:#ffffff;";>
    <colgroup>
      <col width="50"/>
      <col width="500"/>
      <col width="100"/>
      <col width="50"/>
    </colgroup>
    <thread>
      <tr>
        <th>Number</th>
        <th>Title</th>
        <th>Author</th>
        <th>Date</th>
        <th>Views</th>
      </tr>
    </thread>
    <tbody>
      <?php
        $con = mysqli_connect("192.168.0.101", "root", "rlagns5345");
        if(!$con){
          die('Could not connect: ' . mysqli_error);
        } else {
          mysqli_select_db($con, "project");
          $sql_display = "SELECT * FROM question";

          $result = mysqli_query($con, $sql_display);
          echo "<form name=\"qview\">";
          echo "<input type=\"hidden\" name=\"qvalue\"/>";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td align=\"center\">".$row['qNum']."</td>";
            echo "<td><a href=\"javascript:go('".$row['qNum']."');\">".$row['title']."</a></td>";
            echo "<td align =\"center\">".$row['author']."</td>";
            echo "<td align =\"center\">".$row['date']."</td>";
            echo "</tr>";
          }
          echo "</form>";
        }
        mysqli_close($con);
      ?>
    </tbody>
    <tfoot>
      <tr>
        <td align="center" colspan="5">1</td>
      </tr>
    </tfoot>
  <table>
        <input type="button" value="Write" onclick="move('Question_Write.html');"/>
  </body>
</html>