CREATE DATABASE book_lieknins;

USE book_lieknins;

CREATE TABLE authors (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(155) NOT NULL
);

CREATE TABLE books (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(155) NOT NULL,
	author INT NOT NULL,
	release_date date NOT NULL,
	availability INT NOT NULL,
	picture VARCHAR(255) NOT NULL,
	FOREIGN KEY (author) REFERENCES authors(id)
);

CREATE TABLE user (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	username VARCHAR(155) NOT NULL,
	password VARCHAR(155) NOT NULL,
	admin BOOLEAN
);

CREATE TABLE borrowed_books (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(155) NOT NULL,
	return_date DATETIME NOT NULL,
	book_id INT NOT NULL,
	user_id INT NOT NULL,
	FOREIGN KEY (user_id) REFERENCES user(id)
);
