CREATE DATABASE dolphin_crm;
USE dolphin_crm;

CREATE TABLE Users(
	id int IDENTITY(1,1),
	firstname varchar(25),
	lastname varchar(25),
	password varchar(20),
	email varchar(50),
	role varchar(10),
	created_at datetime,

	PRIMARY KEY(id)
);



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

	PRIMARY KEY(id),
	CONSTRAINT fk_Users_Contacts FOREIGN KEY (created_by) REFERENCES Users(id)
);

CREATE TABLE Notes(
	id int IDENTITY(1,1),
	contact_id int,
	comment text,
	created_by int,
	created_at datetime,

	PRIMARY KEY(id),
	CONSTRAINT fk_Users_Notes FOREIGN KEY (created_by) REFERENCES Users(id),
	CONSTRAINT fk_Contacts_Notes FOREIGN KEY (contact_id) REFERENCES Notes(id)
);

INSERT INTO Users (firstname, lastname, password, email, role, created_at) VALUES ('Yannick','Lyn Fatt', '$2y$10$xYiLYzr1b3OlllUvHMZKXu.4jzML9jGsP8eqkQdfyDfMPP1lNQq0a', 'admin@project2.com', 'Admin', getdate());
SELECT * FROM Users;
