<?php
    set_include_path('scripts/gapcm/src'. PATH_SEPARATOR . get_include_path());
        if (!function_exists('curl_init')) {
            require_once 'scripts/purl-master/src/Purl.php';
        }

