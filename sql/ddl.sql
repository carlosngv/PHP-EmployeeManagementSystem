create database employeedb;
use employeedb;

CREATE TABLE positions(
		id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        position_name varchar(255) NOT NULL
);

CREATE TABLE employees (
	    id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        name varchar(255) NOT NULL,
        lastname varchar(255) NOT NULL,
        photo varchar(255),
        cv varchar(255),
        position_id INT(11) NOT NULL,
        entry_date DATE,
        FOREIGN KEY(position_id) REFERENCES positions(id)
);



CREATE TABLE users(
		id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
        username varchar(255) NOT NULL,
        user_password varchar(255) NOT NULL,
        email varchar(255) NOT NULL
);