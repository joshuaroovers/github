
CREATE DATABASE IF NOT EXISTS `Toetsblok3`;

use `Toetsblok3`;


CREATE TABLE IF NOT EXISTS `characters`
(
    `id` INT(11) auto_increment ,
    `name` VARCHAR(255),
    `img` VARCHAR(255),
    `sex` VARCHAR(255),
    `debut_year` INT(11),
    `net_worth` INT(11),
    `description` TEXT,
    `showid` INT(11),

    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `shows`
(
    `id` INT(11) auto_increment,
    `name` VARCHAR(255),
    
    PRIMARY KEY (id)
);