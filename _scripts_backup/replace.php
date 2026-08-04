<?php
$directory = __DIR__ . '/resources/views';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
$files = [];

foreach ($iterator as $info) {
    if ($info->isFile() && $info->getExtension() === 'php') {
        $files[] = $info->getPathname();
    }
}

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Replace action('Controller@method') with action([\App\Http\Controllers\Controller::class, 'method'])
    $newContent = preg_replace_callback('/action\([\'"]([A-Za-z0-9_]+)@([A-Za-z0-9_]+)[\'"]\)/', function ($matches) {
        $controller = $matches[1];
        $method = $matches[2];
        if (in_array($controller, ['AuthController', 'PasswordController'])) {
            return "action([\App\Http\Controllers\Auth\\$controller::class, '$method'])";
        }
        return "action([\App\Http\Controllers\\$controller::class, '$method'])";
    }, $content);
    
    // Replace action('Controller@method', [args]) with action([\App\Http\Controllers\Controller::class, 'method'], [args])
    $newContent = preg_replace_callback('/action\([\'"]([A-Za-z0-9_]+)@([A-Za-z0-9_]+)[\'"]\s*,/i', function ($matches) {
        $controller = $matches[1];
        $method = $matches[2];
        if (in_array($controller, ['AuthController', 'PasswordController'])) {
            return "action([\App\Http\Controllers\Auth\\$controller::class, '$method'],";
        }
        return "action([\App\Http\Controllers\\$controller::class, '$method'],";
    }, $newContent);

    // Replace 'action' => 'Controller@method' with 'action' => [\App\Http\Controllers\Controller::class, 'method']
    $newContent = preg_replace_callback('/\'action\'\s*=>\s*[\'"]([A-Za-z0-9_]+)@([A-Za-z0-9_]+)[\'"]/', function ($matches) {
        $controller = $matches[1];
        $method = $matches[2];
        if (in_array($controller, ['AuthController', 'PasswordController'])) {
            return "'action' => [\App\Http\Controllers\Auth\\$controller::class, '$method']";
        }
        return "'action' => [\App\Http\Controllers\\$controller::class, '$method']";
    }, $newContent);

    // Replace 'action' => ['Controller@method', arg] with 'action' => [[\App\Http\Controllers\Controller::class, 'method'], arg]
    $newContent = preg_replace_callback('/\'action\'\s*=>\s*\[[\'"]([A-Za-z0-9_]+)@([A-Za-z0-9_]+)[\'"]\s*,/i', function ($matches) {
        $controller = $matches[1];
        $method = $matches[2];
        if (in_array($controller, ['AuthController', 'PasswordController'])) {
            return "'action' => [[\App\Http\Controllers\Auth\\$controller::class, '$method'],";
        }
        return "'action' => [[\App\Http\Controllers\\$controller::class, '$method'],";
    }, $newContent);

    if ($newContent !== $content) {
        file_put_contents($file, $newContent);
        echo "Updated: $file\n";
    }
}
echo "Done.\n";
