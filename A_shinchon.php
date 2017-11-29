<html>
  <head>
		  <h1 style="font-size:25px">
		  <?php
          	$n1="";
			$n2="";
			$n3="";
			$n4="";
			$n5="";
			
			$c1=0;
			$c2=0;
			$c3=0;
			$c4=0;
			$c5=0;
			$con = mysqli_connect("localhost", "temp", "nk304704");
			if(!$con){
			  die('Could not connect: ' . mysql_error);
			} else {
			  $chk1=mysqli_select_db($con, "project");
			  $sql_select = "select * from nexttrip";
			  $result=mysqli_query($con, $sql_select);
			  while($row=mysqli_fetch_array($result))
			  {
			  	$n1=$row['name1'];
			  	$n2=$row['name2'];
			  	$n3=$row['name3'];
			  	$n4=$row['name4'];
			  	$n5=$row['name5'];
			  	$c1=$row['cnt1'];
			  	$c2=$row['cnt2'];
			  	$c3=$row['cnt3'];
			  	$c4=$row['cnt4'];
			  	$c5=$row['cnt5'];
			  }
			}
			mysqli_close($con);
          ?>
		  Where Do you want go??
		</h1>
			<style>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
			['Place', 'Prefere'],
			['<?php echo $n1; ?>', <?php echo $c1; ?>],
			['<?php echo $n2; ?>', <?php echo $c2; ?>],
			['<?php echo $n3; ?>', <?php echo $c3; ?>],
			['<?php echo $n4; ?>', <?php echo $c4; ?>],
			['<?php echo $n5; ?>', <?php echo $c5; ?>]
        ]);
        var options = {
          title: 'Our Next Trip Place (preference)'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
	  function move(url) {
	  	location.href=url;
	  }
    </script>
  </head>
  <body>
    	<div id="piechart" style="width: 900px; height: 500px;"></div>
			<div id='jb-container'>
				<input type="button" class="btn btn-success" value="vote" style="float:right" onclick="move('Vote.php');">
				<br/><br/>
		  </div>
				<h1 style="font-size:25px">If you want go Other Place Write it~</h1>
				<table class ="type04" width="800";>
					<thread>
						<tr>
							<th align ="center" scope="row" >Number</th>
							<th align ="center" scope="row" >Title</th>
							<th align ="center" scope="row">Author</th>
							<th align ="center" scope="row">Date</th>
						</tr>
					</thread>
					<?php
						$con = mysqli_connect("localhost", "temp", "nk304704");
						if(!$con){
						  die('Could not connect: ' . mysql_error);
						} else {
						  $chk1=mysqli_select_db($con, "project");
						  $sql_select = "select * from tripcomment";
						  $result=mysqli_query($con, $sql_select);
						  echo "<tbody>";
						  while($row=mysqli_fetch_array($result))
						  {
						  	echo "<tr>";
							echo "<td width=\"10%\" align=\"center\">".$row['idx']."</td>";
							echo "<td width=\"50%\" >".$row['text']."</td>";
							echo "<td width=\"15%\"  align =\"center\">".$row['author']."</td>";
							echo "<td width=\"15%\"  align =\"center\">".$row['date']."</td>";
							echo "</tr>";
						  }
						  echo "</tbody>";
						}
						mysqli_close($con);
					?>
					<tfoot>
						<tr>
							<td scope="row" align="center" colspan="5">1</td>
						</tr>

					</tfoot>
				</table>
				<table width="800";>
					<input type="button" value="Write" onclick="move('A_Comment.php');"/>
				</table>

  </body>
</html>
