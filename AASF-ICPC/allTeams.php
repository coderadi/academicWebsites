<div class="table-responsive">
	<h3>Verified Teams!</h3>
		<div id="unvt">
			<table class="table table-striped table-hover">
					<tr>
					<td><strong>#</strong></td>
					<td><strong>Team Name</strong></td>
					<td><strong>First Member</strong></td>
					<td><strong>First Details</strong></td>
					<td><strong>Second Member</strong></td>
					<td><strong>Second Details</strong></td>
					<td><strong>Third Member</strong></td>
					<td><strong>Third Details</strong></td>
					<td><strong>Email Id</strong></td>

<?php
	include("dbcon.php");
	$q = "SELECT * FROM `teams` WHERE `verified` = '1'";
				$c = 1;
				$r = mysql_query($q) or die(mysql_error());
				while($res = mysql_fetch_array($r)){
					echo "<tr>";
					echo "<td>".$c."</td>";
					echo "<td>".$res['name']."</td>";
					echo "<td>".$res['fname']."</td>";
					echo "<td>".$res['frol']."</td>";
					echo "<td>".$res['sname']."</td>";
					echo "<td>".$res['srol']."</td>";
					echo "<td>".$res['tname']."</td>";
					echo "<td>".$res['trol']."</td>";
					echo "<td>".$res['email']."</td>";
					//echo "<td><button class='btn btn-info' onClick='verify(".$res['id'].")'>Click to Verify!</button></td>";
					echo "</tr>";
					$c++;
				}
				echo "</table>";
				if($c == 1)
					echo "<h4 class='text-danger'>No Verified Team!</h4>";
?>
	</div>
			
</div>