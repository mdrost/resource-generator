<?php declare(strict_types=1);

namespace ApiClients\Tools\ResourceGenerator;

use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Yaml\Yaml;

/**
 * @param string $filename
 * @return array
 */
function readYaml(string $filename): array
{
    return Yaml::parse(file_get_contents($filename));
}

/**
 * @param string $dir
 * @return array
 */
function readYamlDir(string $dir): array
{
    $files = [];
    $directory = new RecursiveDirectoryIterator($dir);
    $directory = new RecursiveIteratorIterator($directory);
    foreach ($directory as $file) {
        if (!is_file($file->getPathname())) {
            continue;
        }

        $files[$file->getPathname()] = readYaml($file->getPathname());
    }
    return $files;
}
