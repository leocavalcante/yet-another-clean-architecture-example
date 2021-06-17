<?php declare(strict_types=1);

use TodoList\Todo\TodoId;

it('wraps a string and is stringable', function (): void {
    $id = new TodoId('test');
    expect($id->getValue())->toBe('test');
    expect((string)$id)->toBe('test');
});