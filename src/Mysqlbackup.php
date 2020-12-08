<?php
namespace Ymboom0042\MysqlBackup;

class MysqlBackup
{
    protected $config = [];
    public function __construct( array $config )
    {
        if (!empty($config)) {
            $this -> $config = $config;
        }
    }


    public function backup()
    {
        $conf = $this -> config;
        exec(sprintf('sudo mysqldump -h%s -p%s -u%s -p%s %s > %s',
            $conf["host"], $conf["port"], $conf["username"], $conf["password"], $conf["database"],$conf["path"]
        ));

    }
}
