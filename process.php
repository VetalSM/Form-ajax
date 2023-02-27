<?php
 $users =  [
     [
     'id' => 1,
    'name' => 'test',
    'email' => 'test@test.ua'
     ],
     [
         'id' => 2,
         'name' => 'test2',
         'email' => 'test2@test.ua'
     ],
     [
         'id' => 3,
         'name' => 'test3',
         'email' => 'test3@test.ua'
     ],
 ];

$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}
if (empty($_POST['lastName'])) {
    $errors['lastName'] = 'Last Name is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}
elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Email Format is Invalid!';
}
else{
    foreach ($users as $user)
        if ($user['email'] == $_POST['email'] ){
            $errors['email'] = 'This email is busy!';
        }
}


if (empty($_POST['password'])) {
    $errors['password'] = 'Password is required.';
}
if (empty($_POST['password2'])) {
    $errors['password'] = 'Password is required.';
}
if (!empty($_POST['password'] !== $_POST['password2'])) {
    $errors['password'] = 'Password mismatch.';
}


if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Register Success!';
}
$log = date('Y-m-d H:i:s') . ' ' . print_r($data, true);
file_put_contents(__DIR__ . '/log.txt', $log . PHP_EOL, FILE_APPEND);

echo json_encode($data);