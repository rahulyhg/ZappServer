<?php


include '../config/medoo.php';


$items = $database->select('drinks','*');

?>

<a href="add.php">Add Drinks Type</a>
<table>
	<thead>
		<th>Name</th>
		<th>Image</th>
		<th>Price</th>
		<th>Actions</th>
	</thead>
	<tbody>
		<?php foreach($items as $item): ?>
			<tr>
				<td><?= $item['Iname'] ?></td>
				<td><img src="../../image/<?= $item['Image'] ?>" width="50"></td>
				<td><?= $item['Price'] ?></td>
				<td><a href="edit.php?id=<?= $item['ID'] ?>">Edit</a>&nbsp;&nbsp;<a href="delete.php?id=<?= $item['ID'] ?>">Delete</a></td>
			<tr>
		<?php endforeach; ?>
	</tbody>
</table>