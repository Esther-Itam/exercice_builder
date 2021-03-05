<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Interfaces\QueryBuilderInterface;
use Patterns\Creational\Builder\Interfaces\QueryInterface;
use Patterns\Creational\Builder\Query;

class MySQLQuery implements QueryBuilderInterface
{
    protected QueryInterface $query;
 


    public function reset(): QueryInterface
    {
        return $this->query = new Query;
         
    }

    public function __construct()
    {
        $this->reset();
    }

    public function select(string $tableName, array $fields)
    {
        $this->query->setTable($tableName);
        $this->query->setFields($fields);
        return $this;
        
    }

    public function where($targetValue)
    {
        $this->query->setTargetValue($targetValue);
        return $this;

    }

    public function limit(int $min, int $max)
    {
        $this->query->setLimit($min, $max);
        return $this;

    }

    public function get()
    {
        $this->select('products', ['name', 'price']);
        $this->limit(5, 10);
        return "SELECT " . str_replace(",", ", ",implode(",", $this->query->fields)) . " FROM " . $this->query->tableName . " LIMIT ". $this->query->min . ", " . $this->query->max;                    
    }
}

