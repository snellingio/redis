<?php
declare (strict_types=1);

namespace Snelling;

use Predis\Client as Predis;

class Redis
{

    private $connection;

    private $redis;

    public function __construct(string $host = '', string $port = '', string $password = '', string $database = '')
    {
        $this->connection = [
            'host'     => $host,
            'port'     => $port,
            'password' => $password,
            'database' => $database,
        ];
    }

    /**
     * @return Predis
     */
    public function instance(): Predis
    {
        if (!$this->redis) {
            $this->redis = new Predis($this->connection);
        }

        return $this->redis;
    }

    /**
     * @param array $connection
     * @return Redis
     */
    public function setConnection(array $connection): Redis
    {
        if (isset($connection['host'])) {
            $this->connection['host'] = $connection['host'];
        }

        if (isset($connection['port'])) {
            $this->connection['port'] = $connection['port'];
        }

        if (isset($connection['password'])) {
            $this->connection['password'] = $connection['password'];
        }

        if (isset($connection['database'])) {
            $this->connection['database'] = $connection['database'];
        }

        return $this;
    }
}

