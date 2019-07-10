<?php declare(strict_types=1);

namespace I18Next;

use atk4\core\ConfigTrait;

class Loader
{

    /**
     * @param string $path Root folder of languages translations
     *
     * @param bool $useFolderAsNamespace
     *
     * @return \Generator
     */
    public function getLocalesFromRootPath(string $path, bool $useFolderAsNamespace = false)
    {
        $language_folders = $this->getLocalesFolders($path);

        foreach ($language_folders as $language => $language_folder) {
            yield new Locale($language, $language_folder, $useFolderAsNamespace);
        }
    }

    private function getLocalesFolders(string $path): array
    {
        $language_folders = [];
        foreach (new \DirectoryIterator($path) as $fileInfo) {
            if ($fileInfo->isDot() || $fileInfo->isFile()) {
                continue;
            }

            $language_folders[$fileInfo->getFilename()] = $fileInfo->getPathName();
        }

        return $language_folders;
    }
}
