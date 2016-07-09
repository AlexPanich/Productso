<?php

namespace AlexPanich\productso\Models;

use Kalnoy\Nestedset\Node;

class PrsoCategory extends Node
{
    protected $fillable = [
        'name', 'slug', '_lft', '_rgt', 'parent_id', 'note', 'desc', 'showtop', 'showside', 'showbottom', 'showcontent',
    ];
}