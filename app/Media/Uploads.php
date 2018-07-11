<?php
/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 11/07/2018
 * Time: 19:21
 */

namespace CodeFlix\Media;


use Illuminate\Http\UploadedFile;

trait Uploads
{
    public function  upload($model, UploadedFile $file, $type)
    {
        /** @var FilesystemAdapter $storage */
        $storage = $model->getStorage();

        $name = md5(time() . "{$model->id}-{$file->getClientOriginalName()}") . ".{$file->guessExtension()}";
        $result = $storage->putFileAs($model->{"{$type}_folder_storage"}, $file, $name);

        return $result ? $name : $result;
    }
}