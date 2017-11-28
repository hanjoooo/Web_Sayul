<html>
  <head>
		  <h1 style="font-size:25px">Where Do you want go??</h1>
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
          ['Everland',     16],
          ['63building',      1],
          ['Indpendence Hall ',  2],
          ['Lotte Tower', 2],
          ['Demilitarized zone',    10]
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
							<th align ="center"scope="row" >Number</th>
							<th align ="center"scope="row" >Comment</th>
							<th align ="center" scope="row">Author</th>
							<th align ="center"scope="row">Date</th>
						</tr>
					</thread>
					<tbody>
						<tr>
							<td width="10%" align="center">3</td>
							<td width="50%" >I want to go seoul tower</td>
							<td width="15%"  align ="center">huhu</td>
							<td width="15%"  align ="center">2017.11.27</td>
						</tr>
						<tr>
							<td  align="center">13</td>
							<td >How about go to busan</td>
							<td  align ="center">top</td>
							<td  align ="center">2017.11.23</td>
						</tr>
					</tbody>
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
