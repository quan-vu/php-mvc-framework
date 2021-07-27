<?php

use App\Core\Application;

class m0001Initial
{
    public function up()
    {
        $db = Application::$app->db;
        $sql = "CREATE TABLE `users` (
            `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `email` VARCHAR(255) NOT NULL,
            `firstname` VARCHAR(255) NOT NULL,
            `lastname` VARCHAR(255) NOT NULL,
            `is_active` TINYINT(1) NOT NULL,
            `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` TIMESTAMP NOT NULL ON UPDATE CURRENT_TIMESTAMP
          ) ENGINE=INNODB; ";
        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "DROP TABLE `users`";
        $db->pdo->exec($sql);
    }
}