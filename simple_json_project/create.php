<?php
include './partials/header.php';
require './users/users.php';
?>

<form action="./store.php" method="POST" enctype="multipart/form-data" class="container w-50 mt-5">
    <h1 class="mb-3">Create User</h1>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="website" class="form-label">Website</label>
        <input type="text" class="form-control" id="website" name="website">
    </div>
    <label class="mb-2">Image</label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>




<?php
include './partials/footer.php';
?>