<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>QnA </title>

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
      f.action="Question_View.php";
      f.method="post";
      f.submit();
    }
  </script>
</head>

<body>
  <table class ="type04" width="800" align="center";>

    <thread>
      <tr>
        <th align="center">Number</th>
        <th align="center">Title</th>
        <th align="center">Author</th>
        <th align="center">Date</th>
      </tr>
    </thread>
    <tbody>
      <?php
        $con = mysqli_connect("localhost", "temp", "nk304704");
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