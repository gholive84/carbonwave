<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Carbonwave">
    <title>Carbonwave</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <?php
    $css_files = ['reset','variables','global','components','sections','responsive'];
    $css_base  = $_SERVER['DOCUMENT_ROOT'] . '/site/assets/css/';
    foreach ($css_files as $f) {
        $path = $css_base . $f . '.css';
        $v    = file_exists($path) ? filemtime($path) : time();
        echo "<link rel=\"stylesheet\" href=\"/site/assets/css/{$f}.css?v={$v}\">\n    ";
    }
    ?>

    <link rel="icon" type="image/png" href="/site/assets/img/favicon.png">

    <?php
    try {
        if (!function_exists('db')) {
            $cms_config = $_SERVER['DOCUMENT_ROOT'] . '/cms/boot.php';
            if (file_exists($cms_config)) require_once $cms_config;
        }
        if (function_exists('setting')) {
            $hc = setting('header_codes', '');
            if ($hc !== '') echo $hc . "\n    ";

            // Inject managed CSS libraries
            $site_libs = json_decode(setting('site_libraries', '[]'), true) ?: [];
            foreach ($site_libs as $lib) {
                if (!empty($lib['css'])) {
                    echo "<link rel=\"stylesheet\" href=\"" . htmlspecialchars($lib['css']) . "\">\n    ";
                }
            }
        }
    } catch (Exception $e) {}
    ?>
</head>
<body>
