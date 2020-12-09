<?php
namespace Ymboom0042\Backup;

use Ymboom0042\Backup\conf\Mysql;

class MysqlBackup
{
    protected $config = [];
    public function __construct( array $config )
    {
        $this -> config = Mysql::getMysqlConf($config);
    }


    public function backup()
    {
        $conf = $this -> config;
//        exec(sprintf('sudo mysqldump -h%s -p%s -u%s -p%s %s > %s',
//            $conf["host"], $conf["port"], $conf["username"], $conf["password"], $conf["database"],$conf["path"]
//        ));

        var_dump(sprintf('sudo mysqldump -h%s -p%s -u%s -p%s %s > %s',
            $conf["host"], $conf["port"], $conf["username"], $conf["password"], $conf["database"],$conf["path"]
        ));
    }
}
