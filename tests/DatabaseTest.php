<?php

class DatabaseTest extends PHPUnit_Framework_TestCase
{
    public function testGetConnection()
    {
        $this->expectException(PDOException::class);
        $conn = new Database();
        $result = $conn->getConnection();
        $this->assertInstanceOf(PDO::class, $result);
    }
}