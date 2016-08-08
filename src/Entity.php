<?php

class Entity implements UserInterface
{
    /**
     * @var \stdClass $user
     */
    private $user;

    public function __construct(\stdClass $user)
    {
        $this->user = $user;
    }

}
