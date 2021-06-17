<?php declare(strict_types=1);

namespace TodoList\Todo;

use Stringable;

class TodoId implements Stringable
{
    public function __construct(private string $value)
    {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}