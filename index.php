<?php
// web-safe output
$output = shell_exec('hostname 2>&1'); // 2>&1 để lấy luôn lỗi stderr
    echo "Hostname: " . htmlspecialchars(trim($output), ENT_QUOTES, 'UTF-8') . "<br>";
}
