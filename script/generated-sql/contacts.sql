
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- contact
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(55) NOT NULL,
    `prenom` VARCHAR(50) NOT NULL,
    `telephone` INTEGER,
    `email` VARCHAR(100) NOT NULL,
    `photo` VARCHAR(100),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB CHARACTER SET='utf8';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
