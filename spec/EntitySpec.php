<?php

namespace spec;

use Entity;
use PhpSpec\ObjectBehavior;
use UserInterface;

class EntitySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new \stdClass());
    }

    function it_is_initializable_this_fails()
    {
        $this->beAnInstanceOf(Entity::class);
        $this->shouldImplement(UserInterface::class);
    }

    function it_is_initializable_this_works()
    {
        $this->shouldImplement(UserInterface::class);
        $this->beAnInstanceOf(Entity::class);
    }
}
