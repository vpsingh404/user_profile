<?php

include 'dbconfig.php';

class Database extends Dbconfig {

    public $connectionString;
    public $dataSet;
    private $sqlQuery;
    
    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;

    function Database() {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;

        $dbPara = new Dbconfig();
        $this->databaseName = $dbPara->dbName;
        $this->hostName = $dbPara->serverName;
        $this->userName = $dbPara->userName;
        $this->passCode = $dbPara->passCode;
        $this->connectionString = $this->dbConnect();
        $dbPara = NULL;
    }

    function dbConnect() {
        $this->connectionString = mysqli_connect($this->serverName, $this->userName, $this->passCode,$this->databaseName);
        //mysql_select_db($this->databaseName, $this->connectionString);        
        return $this->connectionString;
    }

    function dbDisconnect() {
        $this->connectionString = NULL;
        $this->sqlQuery = NULL;
        $this->dataSet = NULL;
        $this->databaseName = NULL;
        $this->hostName = NULL;
        $this->userName = NULL;
        $this->passCode = NULL;
    }

    function selectAll($tableName) {
        $this->sqlQuery = 'SELECT * FROM ' . $this->databaseName . '.' . $tableName;        
        $this->dataSet = mysqli_query($this->connectionString, $this->sqlQuery);
        return $this->dataSet;
    }

    // function selectWhere($tableName, $rowName, $operator, $value, $valueType) {
    //     $this->sqlQuery = 'SELECT * FROM ' . $tableName . ' WHERE ' . $rowName . ' ' . $operator . ' ';
       
    //     if ($valueType == 'int') {
    //         $this->sqlQuery .= $value;
    //     } else if ($valueType == 'char') {
    //         $this->sqlQuery .= "'" . $value . "'";
    //     }
        
    //     $this->dataSet = mysqli_query($this->connectionString,$this->sqlQuery);
    //     $this->sqlQuery = NULL;
    //     return $this->dataSet;
    //     #return $this -> sqlQuery;
    // }

    function selectFreeRun($query) {
        $this->dataSet = mysqli_query($this->connectionString, $query);
        return $this->dataSet;
    }

    function freeRun($query) {
        return mysqli_query($this->connectionString, $query);
    }
}    
    