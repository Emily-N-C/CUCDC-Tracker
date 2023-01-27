CREATE TABLE `Teachers` (
	`ClassID` INT NOT NULL,
	`Teacher` VARCHAR(255) NOT NULL
);

CREATE TABLE `Children` (
	`Child` VARCHAR(255) NOT NULL,
	`ChildID` INT NOT NULL AUTO_INCREMENT,
	`ClassID` INT NOT NULL,
	PRIMARY KEY (`ChildID`)
);

CREATE TABLE `Parents` (
	`ChildID` INT NOT NULL AUTO_INCREMENT,
	`Parent` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`ChildID`)
);

CREATE TABLE `Diaper Changes` (
	`ChildID` INT NOT NULL,
	`ChangeTime` TIME NOT NULL
);

CREATE TABLE `Meal Times` (
	`ChildID` INT NOT NULL,
	`MealTime` TIME NOT NULL
);

CREATE TABLE `Attendance` (
	`ChildID` INT NOT NULL,
	`Date` DATE NOT NULL
);

ALTER TABLE `Teachers` ADD CONSTRAINT `Teachers_fk0` FOREIGN KEY (`ClassID`) REFERENCES `Children`(`ClassID`);

ALTER TABLE `Parents` ADD CONSTRAINT `Parents_fk0` FOREIGN KEY (`ChildID`) REFERENCES `Children`(`ChildID`);

ALTER TABLE `Diaper Changes` ADD CONSTRAINT `Diaper Changes_fk0` FOREIGN KEY (`ChildID`) REFERENCES `Children`(`ChildID`);

ALTER TABLE `Meal Times` ADD CONSTRAINT `Meal Times_fk0` FOREIGN KEY (`ChildID`) REFERENCES `Children`(`ChildID`);

ALTER TABLE `Attendance` ADD CONSTRAINT `Attendance_fk0` FOREIGN KEY (`ChildID`) REFERENCES `Children`(`ChildID`);







