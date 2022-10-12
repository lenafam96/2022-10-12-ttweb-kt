DROP DATABASE IF EXISTS `quanlysach`;

CREATE DATABASE `quanlysach`;

DROP TABLE IF EXISTS `quanlysach`.`tbl_book`;

CREATE TABLE `quanlysach`.`tbl_book` (
  `ID` INT(5) NOT NULL AUTO_INCREMENT,
  `Title` VARCHAR(100) NULL COLLATE 'utf8mb4_unicode_ci',
  `Price` INT(1) NOT NULL DEFAULT 0,
  `Author` VARCHAR(100) NULL COLLATE 'utf8mb4_unicode_ci',
  PRIMARY KEY (`ID`))
COLLATE='utf8mb4_unicode_ci'
ENGINE=InnoDB;

INSERT INTO `quanlysach`.`tbl_book` (`Title`,`Price`,`Author`)
VALUES 
    ('Cuộc sống rất giống cuộc đời',49000,'Hoàng Hải Nguyễn'),
    ('Cuộc sống đếch giống cuộc đời',61300,'Hoàng Hải Nguyễn');

DROP TABLE IF EXISTS `quanlysach`.`tbl_account`;

CREATE TABLE `quanlysach`.`tbl_account` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB;

INSERT INTO `tbl_account` (`Username`, `Password`) VALUES
('admin', '202cb962ac59075b964b07152d234b70');

DROP PROCEDURE IF EXISTS `USP_Login`;

DELIMITER //

CREATE PROCEDURE `USP_Login` (
  IN `Username_in` varchar(50),
  IN `Password_in` varchar(100)
)
BEGIN
  select * from tbl_account where tbl_account.Username = Username_in and tbl_account.Password = Password_in;
END //

DELIMITER ;