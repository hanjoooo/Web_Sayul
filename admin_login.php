<?php
  $id = $_POST['id'];
  $password = $_POST['password'];
  $pass=password($password);
  $con = mysqli_connect("localhost", "temp", "nk304704");
    if(!$con){
      die('Could not connect: ' . mysql_error);
    } else {
      mysqli_select_db($con, "project");
      $sql_display = "SELECT * FROM admin WHERE id='$id'";
      $sql_count = "SELECT COUNT(*) FROM admin WHERE id='$id'";
      $result = mysqli_query($con, $sql_display);
      $result_count = mysqli_query($con, $sql_count);
      $count = mysqli_fetch_array($result_count);
      if($count["COUNT(*)"] > 0){
        while($row = mysqli_fetch_array($result)){
          if($pass == $row['pass']){
            //관리자 페이지 내용 시작
                  echo "<frameset rows=\"80,470,45\" cols=\"980\" framespacing=\"0\" frameborder=\"no\" border=\"0\">
                    <frame src=\"t_shinchon.html\" frameborder=\"yes\" border=\"1\" scrolling=\"no\" noresize=\"noresize\" marginwidth=\"10\" marginheight=\"15\" name=\"headerFrame\"></frame>
                    <frameset cols=\"150,800\" framespacing=\"0\" frameborder = \"no\" border=\"0\" >
                       <frame src=\"s_admin.html\" frameborder=\"yes\" border=\"1\" scrolling=\"auto\" noresize=\"noresize\" marginwidth=\"10\" marginheight=\"15\" name=\"naveFrame\" >
                       </frame>
                       <frame src=\"recruit_admin.php\" frameborder=\"yes\" border=\"1\" scrolling=\"yes\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"15\" name=\"contentsFrame\"></frame>
                    </frameset>
                     <frame src =\"f_shinchon.php\" frameborder=\"yes\" border=\"1\" scrolling=\"no\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" name=\"footerFrame\"></frame>
                      <noframes>";
          } else {
            echo "비밀번호가 틀렸습니다. <a href=\"admin.php\">돌아가기</a>";
          }
        }
      } else {
        echo "아이디가 틀렸습니다. <a href=\"admin.php\">돌아가기</a>";
      }
  }
  mysqli_close($con);
?>