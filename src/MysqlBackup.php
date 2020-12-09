<?php
namespace Ymboom0042\Backup;

use Ymboom0042\Backup\conf\MysqlConf;

class MysqlBackup
{

    protected $config = [];
    public function __construct( array $config = [] )
    {
        $this -> config = MysqlConf::getMysqlConf($config);
    }

    public function setHost( string $host )
    {
        $this -> config["host"] = $host;
    }

    public function setPort( int $port )
    {
        $this -> config["port"] = $port;
    }

    public function setUsername( string $username)
    {
        $this -> config["username"] = $username;
    }

    public function setPassword( string $password)
    {
        $this -> config["password"] = $password;
    }

    public function setDatabase( string $database)
    {
        $this -> config["database"] = $database;
    }

    public function setPath( string $path)
    {
        $this -> config["path"] = $path;

    }

    public function setFilename( string $filename)
    {
        $this -> config["filename"] = $filename;
    }


    /**
     * 执行
     */
    public function exec()
    {
        $conf = MysqlConf::getMysqlConf($this -> config);

        exec(sprintf('sudo mysqldump -h%s -P%s -u%s -p%s %s > %s',
            $conf["host"], $conf["port"], $conf["root"], $conf["password"], $conf["database"],$conf["path"] . '/' . $conf["filename"]
        ));
    }
}
