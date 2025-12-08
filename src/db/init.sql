CREATE DATABASE IF NOT EXISTS `mydatabase`;

USE `mydatabase`;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    website VARCHAR(100),
    comment VARCHAR(100),
    gender VARCHAR(50)
);
