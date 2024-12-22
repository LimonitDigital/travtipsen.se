<?php
require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>staging</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />

</head>
<body>
    <div class="content">
        <h1><?php echo $_ENV['NAME'] ?? ''; ?></h1>
        <p>this is just temp page</p>
    </div>
</body>
</html>