<?php
class Database
{
    private $host;
    private $name;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host = DB_HOST;
        $this->name = DB_NAME;
        $this->user = DB_USER;
        $this->password = DB_PWD;
        $this->charset = DB_CHARSET;
    }

    public function connect()
    {
        try {
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->name . ";charset=" . $this->charset;
            
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }
    }
    
    /**
     * getConnect
     * Retorna la conexion a la BDD de forma estatica
     * @return object de tipo PDO
     */    
    public static function getConnection() : object{
        $self = new self();
        return $self->connect();
    }
}

