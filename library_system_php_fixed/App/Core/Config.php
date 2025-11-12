<?php
namespace App\Core;
class Config {
    public static string $db_dsn = 'mysql:host=localhost;dbname=db_library;charset=utf8mb4';
    public static string $db_user = 'biblioteca';
    public static string $db_pass = 'clave123';
    public static int $loan_days = 14;
    public static float $fine_per_day = 0.5;
}
