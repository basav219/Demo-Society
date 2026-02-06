<!DOCTYPE html>
<html>
<head>
    <title>Customer List</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h3>Registered Customers</h3>

<table class="table table-bordered">
<tr>
    <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th>
</tr>

<?php foreach ($customers as $c): ?>
<tr>
    <td><?= $c['id'] ?></td>
    <td><?= $c['name'] ?></td>
    <td><?= $c['email'] ?></td>
    <td><?= $c['phone'] ?></td>
    <td><?= $c['address'] ?></td>
</tr>
<?php endforeach; ?>

</table>
<a href="<?= base_url('/') ?>" class="btn btn-primary">Add New</a>
</body>
</html>