<?php

function get_connection()
{
    require 'db_config.php';

    try
    {
        $pdo = new PDO(
            $configuration['db_dsn'],
            $configuration['db_user'],
            $configuration['db_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
    catch (PDOException $exception)
    {
        echo $exception;
    }

}
