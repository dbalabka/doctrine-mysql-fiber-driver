<?php
declare(strict_types=1);

namespace Doctrine\DBAL\Driver\MysqlAsync;

use \Doctrine\DBAL\Driver\Connection as ConnectionInterface;
use Doctrine\DBAL\Driver\PingableConnection;
use Doctrine\DBAL\Driver\ServerInfoAwareConnection;
use Doctrine\DBAL\Driver\Statement;
use Doctrine\DBAL\ParameterType;

final class Connection implements ConnectionInterface, PingableConnection, ServerInfoAwareConnection
{

    public function prepare($sql)
    {
        // TODO: Implement prepare() method.
    }

    public function query()
    {
        // TODO: Implement query() method.
    }

    public function quote($value, $type = ParameterType::STRING)
    {
        // TODO: Implement quote() method.
    }

    public function exec($sql)
    {
        // TODO: Implement exec() method.
    }

    public function lastInsertId($name = null)
    {
        // TODO: Implement lastInsertId() method.
    }

    public function beginTransaction()
    {
        // TODO: Implement beginTransaction() method.
    }

    public function commit()
    {
        // TODO: Implement commit() method.
    }

    public function rollBack()
    {
        // TODO: Implement rollBack() method.
    }

    public function errorCode()
    {
        // TODO: Implement errorCode() method.
    }

    public function errorInfo()
    {
        // TODO: Implement errorInfo() method.
    }

    public function ping()
    {
        // TODO: Implement ping() method.
    }

    public function getServerVersion()
    {
        // TODO: Implement getServerVersion() method.
    }

    public function requiresQueryForServerVersion()
    {
        // TODO: Implement requiresQueryForServerVersion() method.
    }
}
