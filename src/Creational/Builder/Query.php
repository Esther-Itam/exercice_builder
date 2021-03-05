<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Interfaces\QueryInterface;

class Query implements QueryInterface
{
    public string $tableName;
    public array $fields;
    public mixed $targetValue; 
    public int $min;
    public int $max;
   

    public function __construct()
    {
        
    }

    public function setTable(string $tableName): QueryInterface
    {
        $this->tableName = $tableName;
        return $this;
    }

    public function setFields(array $fields): QueryInterface
    {
        $this->fields = $fields;
        return $this;
    }

    public function setTargetValue($targetValue): QueryInterface
    {
        $this->targetValue = $targetValue;
        return $this;
    }

    public function setLimit(int $min, int $max): QueryInterface
    {
        $this->min = $min;
        $this->max = $max;
        return $this;
    }

}