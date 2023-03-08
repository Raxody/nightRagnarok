DROP DATABASE nigthragnarok;

CREATE DATABASE nigthragnarok;

USE nigthragnarok;

CREATE TABLE user(
    userName VARCHAR(20) NOT NULL,
    password VARCHAR(30) NOT NULL,
    email VARCHAR(33) NOT NULL,
    cellphone VARCHAR(12) NOT NULL,
    typeUser ENUM('CLIENTE', 'ADMINISTRADOR') NOT NULL,
    PRIMARY KEY (userName)
);

CREATE TABLE customer(
    id VARCHAR(15) NOT NULL,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(33) NOT NULL,
    addressSpecification TEXT NOT NULL,
    userName VARCHAR(20) NOT NULL,
    typeId ENUM('TI', 'CC', 'CE') NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (userName) REFERENCES user(userName)
);

CREATE TABLE administrator(
    id VARCHAR(15) NOT NULL,
    name VARCHAR(30) NOT NULL,
    userName VARCHAR(20) NOT NULL,
    typeId ENUM('TI', 'CC', 'CE') NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (userName) REFERENCES user(userName)
);

CREATE TABLE sale(
    id int AUTO_INCREMENT NOT NULL,
    dateSale DATETIME NOT NULL,
    discount INT,
    total BIGINT NOT NULL,
    idCustomer VARCHAR(15) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE category(
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(15) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE productdrink(
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(30) NOT NULL,
    price BIGINT NOT NULL,
    stock INT NOT NULL,
    idCategory INT NOT NULL,
    amountMilimiters INT NOT NULL,
    alcoholPercentage DECIMAL(2, 2),
    PRIMARY KEY (id),
    FOREIGN KEY (idCategory) REFERENCES category(id)
);

CREATE TABLE salesdetail(
    idProductDrink INT NOT NULL,
    idSale INT NOT NULL,
    quantityByProduct INT NOT NULL,
    valueByProduct BIGINT NOT NULL,
    PRIMARY KEY (idProductDrink, idSale),
    FOREIGN KEY (idProductDrink) REFERENCES productdrink(id),
    FOREIGN KEY (idSale) REFERENCES sale(id)
);