<?php
//Basic For loop
// for ($i = 0; $i < 10; $i++) {
//     echo $i . '<br />';
// };

//Basic While loop
// $i = 0;
// while ($i < 10) {
//     echo $i . '<br />';
//     $i++;
// }

// Do while loop
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);

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
            <ul>
                <?php for ($i = 0; $i < 10; $i++) : ?> <!--FOR Loop -->
                    <li>Number: <?= $i ?></li>
                <?php endfor; ?>

                <?php $i = 0;
                while ($i < 10) : ?> <!-- While loop -->
                    <li>Number: <?= $i ?></li>
                <?php $i++;
                endwhile ?>

                <?php $i = 0;
                do { ?>
                <?php $i++;
                } while ($i < 10) ?>
                <!-- Do While loop -->
            </ul>
        </div>
    </div>
</body>

</html>