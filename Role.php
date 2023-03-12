<?php

class Role
{
    /**
     * @var string
     */
    protected string $title;

    public function setRole(string $title)
    {
        $this->title = $title;
    }
}