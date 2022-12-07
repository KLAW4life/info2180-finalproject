DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;
USE dolphin_crm;

CREATE TABLE `Users`(
	`id` int NOT NULL AUTO_INCREMENT,
	`firstname` varchar(25) NOT NULL default '',
	`lastname` varchar(25) NOT NULL default '',
	`password` varchar(90) NOT NULL default '',
	`email` varchar(50) NOT NULL default '',
	`role` varchar(10) NOT NULL default '',
	`created_at` datetime,

	PRIMARY KEY(`id`)
);

ALTER TABLE `Users` AUTO_INCREMENT=1;

CREATE TABLE `Contacts`(
	`id` int NOT NULL AUTO_INCREMENT,
	`title` varchar(5) NOT NULL default '',
	`firstname` varchar(25) NOT NULL default '',
	`lastname` varchar(25) NOT NULL default '',
	`email` varchar(50) NOT NULL default '',
	`telephone` varchar(15) NOT NULL default '',
	`company` varchar(50) NOT NULL default '',
	`type` varchar(10) NOT NULL default '',
	`assigned_to` int,
	`created_by` int,
	`created_at` datetime,
	`updated_at` datetime,

	PRIMARY KEY(`id`),
	FOREIGN KEY (`created_by`) REFERENCES Users(`id`)
);

ALTER TABLE `Contacts` AUTO_INCREMENT=1;

CREATE TABLE `Notes`(
	`id` int NOT NULL AUTO_INCREMENT,
	`contact_id` int NOT NULL,
	`comment` text NOT NULL default '',
	`created_by` int,
	`created_at` datetime,

	PRIMARY KEY(`id`),
	FOREIGN KEY (`created_by`) REFERENCES Users(`id`),
	FOREIGN KEY (`contact_id`) REFERENCES Notes(`id`)
);

ALTER TABLE `Notes` AUTO_INCREMENT=1;

GRANT ALL PRIVILEGES ON dolphin_crm.* TO 'finalproj_user'@'localhost' IDENTIFIED BY 'password123';

INSERT INTO Users (`firstname`, `lastname`, `password`, `email`, `role`, `created_at`) VALUES ('Yannick','Lyn Fatt', PASSWORD('password123'), 'admin@project2.com', 'Admin', curdate());
SELECT * FROM `Users`;
