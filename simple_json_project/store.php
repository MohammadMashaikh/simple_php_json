<?php
require './users/users.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = createUser($_POST);
    if (isset($_FILES['image'])) {
        if (!is_dir(__DIR__ . "/images")) {
            mkdir(__DIR__ . "/images");
        }
        // Get the file extension from the file name
        $fileName = $_FILES['image']['name'];
        // Search for the dot in the file name
        $dotPosition = strpos($fileName, '.');
        // Take the substring from the dot position till the end of the string
        $extension = substr($fileName, $dotPosition + 1);
        // it will be like this => string(33) "employee-working-thinkstock-2.jpg" int(29) string(3) "jpg"
        $imageFileName = $user_id . '.' . $extension;

        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/images/$imageFileName");
        $user = getUserById($user_id);
        $user['extension'] = $extension;
        updateUser($user, $user_id);
    }
    header('location: ./index.php');
}
