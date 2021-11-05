<?php

namespace Lib\DB;

use App\Models\User;

class Select
{
    private $tableNames;
    private $fieldNames = '*';
    private $ordered;
    private string $orderType;
    private int $limited;
    private int $offset;

    private function buildString($forBuild, $ordered = false)
    {
        $string = '';
        if(is_string($this->$forBuild)) {
            $string = $this->$forBuild;
        } elseif (is_array($this->$forBuild)) {
            foreach ($this->$forBuild as $key => $value) {
                if(!empty($string)) {
                    $string .= ',';
                }
                if(is_int($key)) {
                    $string .= $value;
                } else {
                    if(!$ordered) {
                        $string .= $value . ' AS ' . $key;
                    } else {
                        $string .= $key . ' ' . $value;
                    }

                }
            }
        }
        return $string;
    }

    private function getOrderType()
    {
        return $this->orderType;
    }

    private function getLimited()
    {
        return $this->limited;
    }

    private function getOffset()
    {
        return $this->offset;
    }

    private function getOrdered()
    {

        return $this->buildString($this->ordered, true);
    }

    private function getTableNames()
    {
        return $this->buildString($this->tableNames);
    }

    private function getFieldNames(): string
    {
        return $this->buildString($this->fieldNames);
    }

    public function setFieldNames($fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }

    public function setLimited(int $limited): void
    {
        $this->limited = $limited;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    public function setOrdered(string $ordered): void
    {
        $this->ordered = $ordered;
    }

    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
    }

    public function setTableNames($tableNames): void
    {
        $this->tableNames = $tableNames;
    }

    public function getSqlString()
    {
        $sql = 'SELECT ' . $this->getFieldNames() . ' FROM ' . $this->getTableNames();
        if(!empty($this->ordered)) {
            $sql .= ' ORDER BY ' . $this->getOrdered();
        }
        if($this->limited > 0) {
            $sql .= ' LIMIT ' . $this->getLimited();
            if($this->offset > 0) {
                $sql .= ', ' . $this->getOffset();
            }
        }
    }
}