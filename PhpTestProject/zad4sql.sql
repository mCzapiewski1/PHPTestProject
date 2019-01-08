DROP DATABASE IF EXISTS uzytkownicy;
CREATE DATABASE uzytkownicy; 
USE uzytkownicy;

DROP TABLE IF EXISTS users;
CREATE TABLE users(
	users_id int AUTO_INCREMENT,
	imie VARCHAR(25),
	nazwisko VARCHAR(40),
	miasto VARCHAR(30),
	zawod VARCHAR(50),
	email VARCHAR(40),
	PRIMARY KEY(users_id)
);
