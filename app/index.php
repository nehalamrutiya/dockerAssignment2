<?php
$redis = new Redis();
$redis->connect($_ENV['REDIS_HOST'], $_ENV['REDIS_PORT']);
$redis->set("hello", "world");

$db = new PDO(
    "pgsql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS']
);

echo "<h1>PHP App Running</h1>";
echo "<p>Redis says: " . $redis->get("hello") . "</p>";
echo "<p>Database connected successfully.</p>";
?>
