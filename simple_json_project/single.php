<?php
require './users/users.php';
if (!isset($_GET['id'])) {
    include './partials/not_found.php';
    exit;
}

$user = getUserById($_GET['id']);

if (!$user) {
    include './partials/not_found.php';
    exit;
}

include './partials/header.php';
?>

<div class="card container" style="width: 18rem;">
    <img src="" style="border-radius: 100%;" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $user['name'] ?></h5>
        <p class="card-text">Username: <td><?= $user['username'] ?></td>
        </p>
        <p class="card-text">Email: <td><?= $user['email'] ?></td>
        </p>
        <p class="card-text">Phone: <td><?= $user['phone'] ?></td>
        </p>
        <p class="card-text">Website: <td><?= $user['website'] ?></td>
        </p>

        <a href="./index.php" class="btn btn-outline-success">Back</a>
        <a href="./edit.php?id=<?= $user['id'] ?>" class="btn btn-outline-warning">Edit</a>
        <a href="./delete.php?id=<?= $user['id'] ?>" class="btn btn-outline-danger">Delete</a>

    </div>
</div>

<?php include './partials/footer.php'; ?>