CREATE DATABASE personas_db;

USE personas_db;

CREATE TABLE personas (
    id INT PRIMARY KEY IDENTITY(1,1),
    nombre VARCHAR(50),
    edad INT,
    email VARCHAR(100)
);
