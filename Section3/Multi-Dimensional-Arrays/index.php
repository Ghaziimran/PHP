<?php
$output = null;


$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow'],
];

$output = $fruits[0][0];

$fruits[] = ['Grape', 'Purple'];

$users = [
    ['name' => 'John', 'email' => 'john@john.com', 'password' => '12345'],
    ['name' => 'mary', 'email' => 'mary@mary', 'password' => '123456'],
    ['name' => 'jason', 'email' => 'j@jason', 'password' => '1234567'],
];

$users[] = ['name' => 'mike', 'email' => 'mk@mike', 'password' => '12345678'];

array_push($users, ['name' => 'larry', 'email' => 'lar@larry', 'password' => '123456789']);

array_pop($users);
array_shift($users);
unset($users[1]);

$output = $users[1]['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <p>
            <pre>
                    <?php print_r($users) ?>
                </pre>
            </p>

        </div>
    </div>
</body>

</html>