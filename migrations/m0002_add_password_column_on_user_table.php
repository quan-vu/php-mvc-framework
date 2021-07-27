<?php

use App\Core\Application;

class m0002AddPasswordColumnOnUserTable
{
    public function up()
    {
        $db = Application::$app->db;
        $sql = "ALTER TABLE `users` ADD COLUMN `password` VARCHAR(255) NOT NULL AFTER `email` ";
        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = Application::$app->db;
        $sql = "ALTER TABLE `users` DROP COLUMN `password`";
        $db->pdo->exec($sql);
    }
}