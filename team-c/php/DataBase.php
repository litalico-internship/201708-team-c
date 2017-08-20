<?php

class DataBase
{
    private static $_connInfo = array(
        'host'     => 'localhost',
        'dbname'   => 'team_c',
        'dbuser'   => 'root',
        'password' => 'root'
    );
    private $_pdo;

    public function __construct()
    {
        $this->connectDb();
    }

    public function connectDb()
    {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;port=3306;charset=utf8mb4;',
            self::$_connInfo['host'],
            self::$_connInfo['dbname']
        );
        try {
            $this->_pdo= new PDO($dsn, self::$_connInfo['dbuser'], self::$_connInfo['password']);
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    // クエリを実行
    /* how to use
        $sql = 'SELECT id, name, older FROM table_name WHERE id = :user_id';
        $params = array(
            'user_id' => $userId
        );
        $data = $this->query($sql, $params);
    */
    public function query($sql, array $params = array())
    {
        $stmt = $this->_pdo->prepare($sql);
        if ($params != null) {
            // プレースホルダの数が静的に決まる
            foreach ($params as $key => $val) {
                $stmt->bindValue(':' . $key, $val);
            }
        }
        $stmt->execute();
        $rows = $stmt->fetchAll();

        return $rows;
    }

    // INSERTを実行
    /* how to use
        $data = array(
            'id' => $userId,
            'name' => $userName,
            'older' => $userOlder
        );
        $res = $this->insert('table_naem', $data);
     */
    public function insert($table, $data)
    {
        $fields = array();
        $values = array();
        foreach ($data as $key => $val) {
            $fields[] = $key;
            $values[] = ':' . $key;
        }
        $sql = sprintf(
            "INSERT INTO %s (%s) VALUES (%s)", 
            $this->name,
            implode(',', $fields),
            implode(',', $values)
        );
        $stmt = $this->_pdo->prepare($sql);
        foreach ($data as $key => $val) {
            $stmt->bindValue(':' . $key, $val);
        }
        $res  = $stmt->execute();

        return $res;        
    }
    
}

?>