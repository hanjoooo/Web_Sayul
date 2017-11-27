<!DOCTYPE html>
<html>
<head>
  <title>"Q and A </title>

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

  <table class ="type04" width="800";>
    <thread>
      <tr>
<<<<<<< HEAD
        <th align ="center"scope="row" >Number</th>
        <th align ="center"scope="row" >Title</th>
=======
        <th align ="center" scope="row">Title</th>
        <th align ="center" scope="row">Number</th>
>>>>>>> 36764865fe268a30200ac5bc0d6986530c29880c
        <th align ="center" scope="row">Author</th>
        <th align ="center" scope="row">Date</th>
        <th align ="center" scope="row">Views</th>
      </tr>
    </thread>
    <tbody>
<<<<<<< HEAD
      <tr>
        <td width="10%" align="center">71</td>
        <td width="50%" ><a href="Community_View.php">[신촌팀]2차여행-관광객 인식조사 캠페인</a></td>
        <td width="15%"  align ="center">8기 홍지윤</td>
        <td width="15%"  align ="center">2017.11.23</td>
        <td width="10%"  align ="center">12</td>
      </tr>
      <tr>
        <td  align="center">13</td>
        <td ><a href="Community_View.php">[신촌팀]2차 팀여행 회의</a></td>
        <td  align ="center">7기 김한주</td>
        <td  align ="center">2016.11.23</td>
        <td  align ="center">22</td>
      </tr>
=======
      <?php
        $con = mysqli_connect("192.168.0.101", "root", "rlagns5345");
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
>>>>>>> 36764865fe268a30200ac5bc0d6986530c29880c
    </tbody>
    <tfoot>
      <tr>
        <td scope="row" align="center" colspan="5">1</td>
      </tr>
    </tfoot>
</table>
  </body>
</html>