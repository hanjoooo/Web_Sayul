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
