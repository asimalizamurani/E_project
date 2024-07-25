-- Create the database
CREATE DATABASE ecommerce;

-- Use the database
USE ecommerce;

-- Create the admin table
CREATE TABLE admin (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    userpassword VARCHAR(255) NOT NULL
);

-- Create the tblproduct table
CREATE TABLE tblproduct (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    PName VARCHAR(255) NOT NULL,
    PPrice DECIMAL(10, 2) NOT NULL,
    Pimage VARCHAR(255),
    PCategory VARCHAR(255) NOT NULL
);

-- Create the tbluser table
CREATE TABLE tbluser (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(255) NOT NULL UNIQUE,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Password VARCHAR(255) NOT NULL,
    Number VARCHAR(20)
);

-- Create the categories table
CREATE TABLE categories (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);