<?php


function getUsers()
{
    return json_decode(file_get_contents(__DIR__ . '\users.json'), true);
}

function getUserById($id)
{ {
        $users = getUsers();
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }
}

function createUser($data)
{
    $users = getUsers();
    $highestID = 0;

    foreach ($users as $user) {
        if ($user['id'] > $highestID) {
            $highestID = $user['id'];
        }
    }
    $newId = $highestID + 1;
    $newUser = [
        'id' => $newId,
        'name' => $data['name'],
        'username' => $data['username'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'website' => $data['website']
    ];
    $users[] = $newUser;
    $jsonData = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . '\users.json', $jsonData);
    return $newId;
}

function updateUser($data, $id)
{
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }

    file_put_contents(__DIR__ . '\users.json', json_encode($users, JSON_PRETTY_PRINT));
    return $updateUser;
}


function deleteUser($id)
{
    $users = getUsers();
    foreach ($users as $i => $user) {
        if ($user['id'] == $id) {
            array_splice($users, $i, 1);
        }
    }
    file_put_contents(__DIR__ . '/users.json', json_encode($users, JSON_PRETTY_PRINT));
}
