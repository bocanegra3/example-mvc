<?php
class Db
{
    protected $connection;
    public function __construct()
    {
        try {
            $config = parse_ini_file('config/config_commerce.ini');
            $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"];
            $this->connection = new PDO(
                "mysql:host=" . $config['SERVER_NAME']
                    . ";dbname=" . $config['DATABASE_NAME'],
                $config['USER_NAME'],
                $config['PASSWORD'],
                $options
            );
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
        return $this->connection;
    }
    public function prepare($query)
    {
        return $this->connection->prepare($query);
    }
    public function query($query)
    {
        return $this->connection->query($query);
    }
    public function Close()
    {
        $this->connection = null;
    }
}
