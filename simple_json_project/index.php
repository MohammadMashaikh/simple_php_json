<?php
include './partials/header.php';
require './users/users.php';
$users = getUsers();
?>

<div class="container">
    <p>
        <a class="btn btn-success d-flex justify-content-around mt-5" href="create.php">Create new User</a>
    </p>
    <table class="table container mt-5">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Website</th>
                <th scope="col">Actions</th>
            </tr>

        </thead>
        <tbody>
            <?php
            foreach ($users as $user) :
            ?>
                <tr>
                    <td>
                        <?php if (isset($user['extension'])) : ?>
                            <img style="width: 60px; height: 90px;" src="<?= "images/" . $user['id'] . "." . $user['extension'] ?>" alt="">
                        <?php endif; ?>
                    </td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['phone'] ?></td>
                    <td>
                        <a target="_blank" href="https://<?= $user['website'] ?>"><?= $user['website'] ?></a>
                    </td>
                    <td>
                        <a href="./single.php?id=<?= $user['id'] ?>" class="btn btn-outline-info">View</a>
                        <a href="./edit.php?id=<?= $user['id'] ?>" class="btn btn-outline-warning">Edit</a>
                        <a href="./delete.php?id=<?= $user['id'] ?>" class="btn btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include './partials/footer.php'; ?>