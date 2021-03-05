<?php 

namespace Patterns\Creational\Builder\Interfaces;

interface QueryBuilderInterface
{
    public function reset(): QueryInterface;
    public function select(string $tableName, array $fields);
    public function where($targetValue);
    public function limit(int $min, int $max);
    public function get();

}