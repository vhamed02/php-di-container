<?php

class Container
{
    private $binds;

    public function set(string $id, callable $callable): void
    {
        $this->binds[$id] = $callable;
    }

    public function get(string $id)
    {
        if (!isset($this->binds[$id])) {
            throw new Exception(sprintf('Target class {%s} does not exists!', $id));
        }
        $callable = $this->binds[$id];

        return $callable($this);
    }
}