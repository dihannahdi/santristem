<?php

// Bootstrap Vercel environment
require __DIR__ . '/../bootstrap/vercel.php';

// Forward Vercel requests to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
\