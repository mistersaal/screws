<?php


namespace App\Traits;


trait HasVisibilityAttribute
{
    public function getVisibleItems($options = ['*'])
    {
        return $this->where('visible', true)->get($options);
    }

    public function getHiddenItems($options = ['*'])
    {
        return $this->where('visible', false)->get($options);
    }

    public function visibleItems()
    {
        return $this->where('visible', true);
    }

    public function hiddenItems()
    {
        return $this->where('visible', false);
    }
}
