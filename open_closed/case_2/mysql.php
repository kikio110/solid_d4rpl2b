<?php
require_once 'dbms.php';
class MySQL implements DBMS {
    public function createConnection(): void{
    echo "MySQL connection created";
    }
}