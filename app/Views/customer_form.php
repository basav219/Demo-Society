<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">

<h3>Customer Registration</h3>

<form method="post" action="<?= base_url('customer/save') ?>">
    <input class="form-control mb-2" name="name" placeholder="Name" required>
    <input class="form-control mb-2" name="email" placeholder="Email" required>
    <input class="form-control mb-2" name="phone" placeholder="Phone">
    <textarea class="form-control mb-2" name="address" placeholder="Address"></textarea>

    <button class="btn btn-primary">Register</button>
    <a href="<?= base_url('customer/list') ?>" class="btn btn-success">View Customers</a>
</form>

</body>
</html>