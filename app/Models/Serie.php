<?php

namespace CodeFlix\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Serie extends Model implements Transformable, TableInterface
{
    use TransformableTrait;
    use SoftDeletes;

    protected $fillable = ['title', 'description'];

    public function getTableHeaders()
    {
        return ['#'];
    }

    public function getValueForHeader($header)
    {
        switch ($header) {
            case '#':
                return $this->id;
        }
    }
}
