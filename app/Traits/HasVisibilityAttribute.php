<?php


namespace App\Traits;


trait HasVisibilityAttribute
{
    public function getVisibleItems()
    {
        return $this->where('visible', true)->get();
    }

    public function getHiddenItems()
    {
        return $this->where('visible', false)->get();
    }
}
