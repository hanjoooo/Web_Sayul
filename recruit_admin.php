<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>참가 신청서 관리 </title>

  <style>
  @import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);
  body{
    font-family : "Nanum Gothic", sans-serif;
  }
  #jb-container {
        width: 670px;
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
      var f=document.qview;
      f.qvalue.value=to_send;
      f.action="recruit_admin_detail.php";
      f.method="post";
      f.submit();
    }
    function go2(to_send) {
      var f=document.qview;
      f.qvalue.value=to_send;
      f.action="recruit_admin_check.php";
      f.method="post";
      f.submit();
    }
  </script>
</head>

<body>
  <table class ="type04" width="800" align="center";>

    <thread>
      <tr>
        <th align="center">Name</th>
        <th align="center">Age</th>
        <th align="center">Nationality</th>
        <th align="center">E-mail</th>
        <th align="center">Confirmed</th>
      </tr>
    </thread>
    <tbody>
      <?php
        $con = mysqli_connect("localhost", "temp", "nk304704");
        if(!$con){
          die('Could not connect: ' . mysqli_error);
        } else {
          mysqli_select_db($con, "project");
          $sql_display = "SELECT * FROM recruit";

          $result = mysqli_query($con, $sql_display);
          echo "<form name=\"qview\">";
          echo "<input type=\"hidden\" name=\"qvalue\"/>";
          while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td><a href=\"javascript:go('".$row['email']."');\">".$row['name']."</a></td>";
            echo "<td align =\"center\">".$row['age']."</td>";
            echo "<td align =\"center\">".$row['nationality']."</td>";
            echo "<td align=\"center\">".$row['email']."</td>";
            if($row['confirmed']==1) {
              echo "<td width=\"20%\">confirmed</td>";
            } else {
              echo "<td width=\"20%\"><a href=\"javascript:go2('".$row['email']."');\">confirm??</a><br/></td>";
            }
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
  </body>
</html>
