<?php

require_once 'dbms.php';

class DBMSConnection {
    private $dbms;

    public function __construct(DBMS $dbms) {
        $this->dbms = $dbms;
    }

    public function connectDB() {
        $this->dbms->createConnection();
    }
}