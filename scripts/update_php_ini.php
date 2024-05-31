<?php

function updatePhpIni($prependFile)
{
    // Locate the php.ini file
    $phpIniFile = php_ini_loaded_file();
    if (!$phpIniFile) {
        throw new Exception("Unable to locate php.ini file.");
    }

    // Read the php.ini file
    $iniContent = file_get_contents($phpIniFile);
    if ($iniContent === false) {
        throw new Exception("Unable to read php.ini file.");
    }

    // Check if auto_prepend_file is already set
    $autoPrependPattern = '/^auto_prepend_file\s*=\s*.*$/m';
    if (preg_match($autoPrependPattern, $iniContent)) {
        // Update the existing directive
        $iniContent = preg_replace($autoPrependPattern, "auto_prepend_file = \"$prependFile\"", $iniContent);
    } else {
        // Add the directive
        $iniContent .= PHP_EOL . "auto_prepend_file = \"$prependFile\"" . PHP_EOL;
    }

    // Write the updated content back to the php.ini file
    if (file_put_contents($phpIniFile, $iniContent) === false) {
        throw new Exception("Unable to write to php.ini file.");
    }

    echo "Updated php.ini successfully.\n";
}

try {
    $prependFile = __DIR__ . '/../bootstrap.php';
    updatePhpIni($prependFile);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
