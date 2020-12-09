<?php
namespace Ymboom0042\Backup\conf;




class Mysql
{
    const HOST = "127.0.0.1";
    const PORT = 3306;
    const ROOT = "root";
    const PASSWORD = "";
    const DATABASE = "";
    const PATH = "";

    private static $MysqlConfMap = [
        "host" => self::HOST,
        "port" => self::PORT,
        "root" => self::ROOT,
        "password" => self::PASSWORD,
        "database" => self::DATABASE,
        "path" => self::PATH

    ];


    /**
     * 获取配置
     * @param array $conf
     * @return array
     */
    public static function getMysqlConf( array $conf ) : array
    {
        if (!empty($conf)) {
            foreach ( self::$MysqlConfMap as $k => $m ) {
                if (!isset($conf[$k])) {
                    $conf[$k] = $m;
                }
            }
        }

        return $conf;
    }
}