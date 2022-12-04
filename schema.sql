CREATE DATABASE dolphin_crm2;
USE dolphin_crm2;

CREATE TABLE `Users`(
	`id` int NOT NULL AUTO_INCREMENT,
	`firstname` varchar(25) NOT NULL default '',
	`lastname` varchar(25) NOT NULL default '',
	`password` varchar(20) NOT NULL default '',
	`email` varchar(50) NOT NULL default '',
	`role` varchar(10) NOT NULL default '',
	`created_at` datetime,

	PRIMARY KEY(`id`)
);

ALTER TABLE `Users` AUTO_INCREMENT=1;


CREATE TABLE Contacts(
	id int IDENTITY(1,1),
	title varchar(5),
	firstname varchar(25),
	lastname varchar(25),
	email varchar(50),
	telephone varchar(15),
	company varchar(50),
	type varchar(10),
	assigned_to int,
	created_by int,
	created_at datetime,
	updated_at datetime,
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

INSERT INTO Users (`firstname`, `lastname`, `password`, `email`, `role`, `created_at`) VALUES ('Yannick','Lyn Fatt', PASSWORD('password123'), 'admin@project2.com', 'Admin', curdate());
SELECT * FROM `Users`;