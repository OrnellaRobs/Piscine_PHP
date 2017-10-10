CREATE TABLE ft_table (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	login varchar(4) NOT NULL DEFAULT 'toto',
	groupe NOT NULL ENUM('staff', 'student', 'other'),
	date_de_creation DATETIME NOT NULL,
);