<?php


interface databaseConnectionInterface
{
    public function connectionOpen(): string;

    public function connectionClose();
}


class InterfaceDemo implements databaseConnectionInterface
{

    public function connectionClose(): string
    {
        // TODO: Implement connectionClose() method.
        return "ConnectionToDatabaseClosed";

    }

    public function connectionOpen(): string
    {
        // TODO: Implement connectionOpen() method.
        return "ConnectionToDatabaseOpen";
    }

    public static function databaseAccessOperations(): string
    {
        return "select * from Database";

    }
}