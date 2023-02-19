

-- create table name as a `donor details`
CREATE TABLE `foodavail`.`donor details`
(`dno` INT(255) NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(255) NOT NULL , 
`mono` INT(100) NOT NULL , 
`address` VARCHAR(255) NOT NULL , 
`locality` VARCHAR(255) NOT NULL , 
`city` VARCHAR(255) NOT NULL , 
`zip` INT(6) NOT NULL , 
`fcatagory` VARCHAR(255) NOT NULL, 
PRIMARY KEY (`dno`)) 
ENGINE = InnoDB;