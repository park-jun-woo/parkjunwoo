<?php
namespace Parkjunwoo\Connector;

use mysqli;
use Parkjunwoo\Config\Database;
use Parkjunwoo\Interface\Singleton;
use Parkjunwoo\Interface\SQL;

/**
 * Mysql은 웹 어플리케이션에서 외부 Mysql 데이터베이스에 접근하는 클래스입니다.
 * PHP Version 8.0
 * @name Mysql Version 1.0
 * @package Parkjunwoo
 * @see https://github.com/park-jun-woo/parkjunwoo The Parkjunwoo GitHub project
 * @author Park Jun woo <mail@parkjunwoo.com>
 * @copyright 2023 parkJunwoo.com
 * @license https://opensource.org/license/bsd-2-clause/ The BSD 2-Clause License
 * @note This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */
class Mysql implements Singleton, SQL{
    protected static Mysql $instance;
    public static function getInstance(...$params):self{
        if(!isset(self::$instance)){self::$instance = new self(...$params);}
        return self::$instance;
    }
    protected Database $database;
    protected mysqli $connection;
    /**
     * Mysql 생성자
     * DB 연결
     * @param Database $database 데이터베이스 설정 객체
     */
    public function __construct(Database $database){
        $this->database = $database;
    }
    /**
     * Mysql 파괴자
     * DB 연결 해제
     */
    public function __destruct(){
        if(isset($this->connection)){$this->connection->close();}
    }
    /**
     * 쿼리 실행
     *
     * @param string $query 쿼리문
     * @return mixed 결과
     */
    public function query(string $query){
        $this->connect();
        return $this->connection->query($query);
    }
    /**
     * 입력 결과 키값
     *
     * @param string $query 쿼리문
     * @return int 결과 키값
     */
    public function insertId():int{
        return $this->connection->insert_id;
    }
    /**
     * 쿼리 결과 배열로 반환
     *
     * @param mixed $result 쿼리결과
     * @return array|null 결과 배열
     */
    public function fetch($result):?array{
        return $result->fetch_assoc();
    }
    /**
     * 잠금을 실행합니다.
     * 
     * @return mixed 잠금 실행 성공 여부를 반환합니다.
     */
    public function lock(string $tableName):bool{
        $this->connect();
        return $this->connection->query("LOCK TABLES {$tableName} WRITE");
    }
    /**
     * 잠금을 해제합니다.
     * 
     * @return mixed 잠금 해제 성공 여부를 반환합니다.
     */
    public function unlock():bool{
        return $this->connection->query("UNLOCK TABLES");
    }
    /**
     * 트랜잭션을 실행합니다.
     * 
     * @return boolean 트랜잭션 실행 성공 여부를 반환합니다.
     */
    public function beginTransaction():bool{
        $this->connect();
        return $this->connection->begin_transaction();
    }
    /**
     * 트랜잭션을 커밋합니다.
     * 
     * @return boolean 트랜잭션 커밋 성공 여부를 반환합니다.
     */
    public function commit():bool{
        return $this->connection->commit();
    }
    /**
     * 트랜잭션을 롤백합니다.
     * 
     * @return boolean 트랜잭션 롤백 성공 여부를 반환합니다.
     */
    public function rollback():bool{
        return $this->connection->commit();
    }
    /**
     * 접속을 하지 않았다면 데이터베이스에 접속합니다.
     * 
     * @return void
     */
    protected function connect(){
        if(isset($this->connection)===false){
            $this->connection = new mysqli(
                $this->database->host(),
                $this->database->username(),
                $this->database->password(),
                $this->database->database()
            );
            if($this->connection->connect_error){
                die('Connection failed: '.$this->connection->connect_error);
            }
        }
    }
}