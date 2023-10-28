<!DOCTYPE html>
<html>
<head>
<title>Insert</title>
</head>
<body>



		<tr><td></td><td><input type="submit" name="add"></td></tr>
		</table>
		</form>
	</div>
	<br><br>
	<div align="center">
	<u><h2>Display Data</h2></u>
		<table border="1">
			<thead>
				<th>Name</th>
				<th>DOB</th>
				<th>Gender</th>
				<th>Address</th>
				<th>country</th>
				<th>state</th>
				<th>city</th>
				<th>pincode</th>
				<th>sphone</th>
				<th>pphone</th>
				<th>courses</th>
				<th>Email</th>
				<th>password</th>


			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `stu`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['dob']; ?></td>
							<td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['address']; ?></td>
							<td><?php echo $row['country']; ?></td>
							<td><?php echo $row['state']; ?></td>
							<td><?php echo $row['city']; ?></td>
							<td><?php echo $row['pincode']; ?></td>
							<td><?php echo $row['sphone']; ?></td>
							<td><?php echo $row['pphone']; ?></td>
							<td><?php echo $row['courses']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td>
								<a href="ed.php?id=<?php echo $row['userid']; ?>">Edit</a>
								<a href="del.php?id=<?php echo $row['userid']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>