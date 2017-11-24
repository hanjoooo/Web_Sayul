<?php

if (!eregi($_SERVER['HTTP_HOST'], $_SERVER['HTTP_REFERER'])) {
	echo "	<script>
				alert('잘못된 접근입니다.');
				location.href='javascript:history.go(-1);';
			</script>";
} else {

  $id = $_POST['id'];
  $pass = $_POST['password'];

  $con = mysql_connect("localhost", "root", "rlagns5345");
    if(!$con){
      die('Could not connect: ' . mysql_error);
    } else {
      mysql_select_db("project", $con);
      $sql_display = "SELECT * FROM admin WHERE id='$id'";
      $sql_count = "SELECT COUNT(*) FROM admin WHERE id='$id'";

      $result = mysql_query($sql_display, $con);
      $result_count = mysql_query($sql_count, $con);

      $count = mysql_fetch_array($result_count);

      if($count["COUNT(*)"] > 0){
        while($row = mysql_fetch_array($result)){

          if($pass == $row['pass']){
            //관리자 페이지 내용 시작
						echo "<frameset rows=\"80,470,45\" cols=\"980\" framespacing=\"0\" frameborder=\"no\" border=\"0\">
					  	<frame src=\"t_shinchon.html\" frameborder=\"yes\" border=\"1\" scrolling=\"no\" noresize=\"noresize\" marginwidth=\"10\" marginheight=\"15\" name=\"headerFrame\"></frame>
					  	<frameset cols=\"150,800\" framespacing=\"0\" frameborder = \"no\" border=\"0\" >
					  		<frame src=\"s_admin.html\" frameborder=\"yes\" border=\"1\" scrolling=\"auto\" noresize=\"noresize\" marginwidth=\"10\" marginheight=\"15\" name=\"naveFrame\" >
					  		</frame>
					  		<frame src=\"c_shinchon.php\" frameborder=\"yes\" border=\"1\" scrolling=\"yes\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"15\" name=\"contentsFrame\"></frame>
					  	</frameset>
							<frame src =\"footer_frame.php\" frameborder=\"yes\" border=\"1\" scrolling=\"no\" noresize=\"noresize\" marginwidth=\"0\" marginheight=\"0\" name=\"footerFrame\"></frame>
						 	<noframes>";

          } else {
            echo "비밀번호가 틀렸습니다. <a href=\"admin.php\">돌아가기</a>";
          }
        }
      } else {
        echo "아이디가 틀렸습니다. <a href=\"admin.php\">돌아가기</a>";
      }
  }
  mysql_close($con);
}

?>
