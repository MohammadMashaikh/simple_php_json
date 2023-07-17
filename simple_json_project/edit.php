<?php
include './partials/header.php';
require './users/users.php';
$user = getUserById($_GET['id']);
?>

<form action="./update.php" method="POST" enctype="multipart/form-data" class="container w-50 mt-5">
    <input type="hidden" class="form-control" id="id" name="id" value="<?= $user['id'] ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?= $user['email'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone'] ?>" required>
    </div>
    <div class="mb-3">
        <label for="website" class="form-label">Website</label>
        <input type="text" class="form-control" id="website" name="website" value="<?= $user['website'] ?>">
    </div>
    <label class="mb-2">Image</label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>




<?php
include './partials/footer.php';
?>