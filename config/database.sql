CREATE DATABASE nigthRagnarok;

CREATE TABLE alcoholicDrink(
    id INT AUTO_INCREMENT NOT NULL,
    nameAlcoholicDrink VARCHAR(20) NOT NULL,
    kind VARCHAR(20) NOT NULL,
    alcoholPercentage DECIMAL(10,2) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (id)
);