<?php declare(strict_types=1);

namespace TodoList\Todo;

interface TodoRepository
{
    public function find(TodoId $id): Todo;

    public function save(Todo $todo): TodoId;
}