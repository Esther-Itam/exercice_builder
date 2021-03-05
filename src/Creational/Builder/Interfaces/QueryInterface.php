<?php 

namespace Patterns\Creational\Builder\Interfaces;


interface QueryInterface
{
    public function setTable(string $tableName): QueryInterface;
    public function setFields(array $fields): QueryInterface;
    public function setTargetValue($targetValue): QueryInterface;
    public function setLimit(int $min, int $max): QueryInterface;
}