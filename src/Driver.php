<?php
declare(strict_types=1);

namespace Doctrine\DBAL\Driver\MysqlAsync;

use Doctrine\DBAL\Driver\AbstractMySQLDriver;

final class Driver extends AbstractMySQLDriver
{

    public function connect(array $params, $username = null, $password = null, array $driverOptions = [])
    {
        // TODO: implement
    }

    public function getName()
    {
        return 'mysql_async';
    }
}
