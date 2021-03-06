<?php
/**
 * Created by PhpStorm.
 * User: Marlon
 * Date: 15/05/2018
 * Time: 00:16
 */

namespace CodeFlix\Media;


trait SeriePaths
{
    use ThumbPaths;

    public function  getThumbFolderStorageAttribute(){
        return "series/{$this->id}";
    }

    public function getThumbAssetAttribute()
    {
        return route('admin.series.thumb_asset',['serie'=>$this->id]);
    }

    public function getThumbSmallAssetAttribute()
    {
        return route('admin.series.thumb_small_asset',['serie'=>$this->id]);
    }

    public function getThumbDefaultAttribute() {
        return env('SERIE_NO_THUMB');
    }
}