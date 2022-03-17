<?php

function getDatabaseConfig()
{
    return [
        "database" => [
            "tests" => [
                "url" => "mysql:host=localhost:3306;dbname=ppdb_21",
                "username" => "root",
                "password" => "y2en"
            ],
            "production" => [
                "url" => "mysql:host=localhost:3306;dbname=ppdb_21",
                "username" => "root",
                "password" => "y2en"
            ],
        ],
    ];
}