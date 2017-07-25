/*
    Table User.
*/

DROP DATABASE if exist `projet-repas-sql`;

CREATE DATABASE `projet-repas-sql`;

CREATE TABLE `user` (
    id INT auto_increment PRIMARY KEY,
    `pseudo` VARCHAR(128) NOT NULL,
    `mdp`VARCHAR(32) NOT NULL,
    `dateSign` date NOT NULL,
    `dateLog` date NOT NULL,
)

CREATE TABLE `event`(
    id INT auto_increment PRIMARY KEY,
    `name` VARCHAR(128) NOT NULL,
    `type`VARCHAR(32) NOT NULL,
    `lieu` VARCHAR(64) NOT NULL,
    `prix` INT NOT NULL,
    `nombrePersonnes` INT NOT NULL,
    `description` VARCHAR(556) NOT NULL,
    `image` VARBINARY(MAX) NOT NULL,
)

ALTER TABLE