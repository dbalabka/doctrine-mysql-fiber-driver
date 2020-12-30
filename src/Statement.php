<?php
declare(strict_types=1);

namespace Doctrine\DBAL\Driver\MysqlAsync;

use Doctrine\DBAL\Driver\Exception;
use Doctrine\DBAL\Driver\Result;
use Doctrine\DBAL\Driver\Statement as StatementInterface;
use Doctrine\DBAL\ParameterType;
use PDO;
use Traversable;

class Statement implements \IteratorAggregate, StatementInterface, Result
{

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }

    public function fetchNumeric()
    {
        // TODO: Implement fetchNumeric() method.
    }

    public function fetchAssociative()
    {
        // TODO: Implement fetchAssociative() method.
    }

    public function fetchOne()
    {
        // TODO: Implement fetchOne() method.
    }

    public function fetchAllNumeric(): array
    {
        // TODO: Implement fetchAllNumeric() method.
    }

    public function fetchAllAssociative(): array
    {
        // TODO: Implement fetchAllAssociative() method.
    }

    public function fetchFirstColumn(): array
    {
        // TODO: Implement fetchFirstColumn() method.
    }

    public function free(): void
    {
        // TODO: Implement free() method.
    }

    public function closeCursor()
    {
        // TODO: Implement closeCursor() method.
    }

    public function columnCount()
    {
        // TODO: Implement columnCount() method.
    }

    public function setFetchMode($fetchMode, $arg2 = null, $arg3 = null)
    {
        // TODO: Implement setFetchMode() method.
    }

    public function fetch($fetchMode = null, $cursorOrientation = PDO::FETCH_ORI_NEXT, $cursorOffset = 0)
    {
        // TODO: Implement fetch() method.
    }

    public function fetchAll($fetchMode = null, $fetchArgument = null, $ctorArgs = null)
    {
        // TODO: Implement fetchAll() method.
    }

    public function fetchColumn($columnIndex = 0)
    {
        // TODO: Implement fetchColumn() method.
    }

    public function bindValue($param, $value, $type = ParameterType::STRING)
    {
        // TODO: Implement bindValue() method.
    }

    public function bindParam($param, &$variable, $type = ParameterType::STRING, $length = null)
    {
        // TODO: Implement bindParam() method.
    }

    public function errorCode()
    {
        // TODO: Implement errorCode() method.
    }

    public function errorInfo()
    {
        // TODO: Implement errorInfo() method.
    }

    public function execute($params = null)
    {
        // TODO: Implement execute() method.
    }

    public function rowCount()
    {
        // TODO: Implement rowCount() method.
    }
}
