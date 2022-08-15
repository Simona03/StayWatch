CREATE DATABASE staywatchdb;
    
    CREATE TABLE IF NOT EXISTS `Accounts` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255),
    `email` VARCHAR(255),
    `password` VARCHAR(60),
    `image` VARCHAR(255),
    PRIMARY KEY `pk_id`(`id`)
    ) ENGINE = InnoDB;
    