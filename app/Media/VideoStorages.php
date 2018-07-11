<?php
/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 15/05/2018
 * Time: 00:09
 */

namespace CodeFlix\Media;


use Illuminate\Filesystem\FilesystemAdapter;

trait VideoStorages
{

    /**
     * @return FilesystemAdapter
     */
    public function getStorage() {
        return \Storage::disk($this->getDiskDriver());
    }

    protected function getDiskDriver() {

        return config('filesystems.default');
    }

    protected function getAbsolutePath(FilesystemAdapter $storage, $fileRelativePath)
    {
        return $storage->getDriver()->getAdapter()->applyPathPrefix($fileRelativePath);
    }

}