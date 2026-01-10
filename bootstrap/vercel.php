<?php

// Ensure ALL Vercel environment variables are available to PHP's $_ENV
// This is critical because Laravel's env() only reads $_ENV after config:cache
// TRIM all values to remove any whitespace/newline characters
foreach ($_SERVER as $key => $value) {
    if (!isset($_ENV[$key]) && is_string($value)) {
        $_ENV[$key] = trim($value);
    }
}

// Create necessary writable directories in /tmp for Vercel
$dirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Create empty database if it doesn't exist
$dbPath = $_ENV['DB_DATABASE'] ?? '/tmp/database.sqlite';
$dbNeedsSetup = !file_exists($dbPath);

if ($dbNeedsSetup) {
    @touch($dbPath);
    @chmod($dbPath, 0666);
}

// Remove any cached config files - they don't work with Vercel environment variables
$cacheFiles = [
    __DIR__ . '/../bootstrap/cache/config.php',
    __DIR__ . '/../bootstrap/cache/routes-v7.php',
    __DIR__ . '/../bootstrap/cache/events.php',
    __DIR__ . '/../bootstrap/cache/packages.php',
    __DIR__ . '/../bootstrap/cache/services.php',
];

foreach ($cacheFiles as $file) {
    if (file_exists($file)) {
        @unlink($file);
    }
}

// Run migrations and seeders if database was just created
if ($dbNeedsSetup) {
    // We need to bootstrap Laravel to run Artisan commands
    // This will happen after this file is loaded, so we'll use a flag file
    $flagFile = '/tmp/db-setup-needed';
    @touch($flagFile);
}
