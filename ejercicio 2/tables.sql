
CREATE DATABASE codingtest2;
USE codingtest2;
CREATE TABLE salespersons(
        ID int NOT NULL,
        Name varchar(20) NOT NULL,
        Age int NOT NULL,
        Salary int NOT NULL,
        PRIMARY KEY (ID) );

CREATE TABLE customers(
        ID int NOT NULL,
        Name varchar(20) NOT NULL,
        City varchar(20) NOT NULL,
        Industry_Type char(1) NOT NULL,
        PRIMARY KEY (ID) );

CREATE TABLE orders(
        Number int NOT NULL,
        order_date date,
        cust_id int NOT NULL,
        salesperson_id int NOT NULL,
        Amount int NOT NULL,
        PRIMARY KEY (Number),
        FOREIGN KEY (cust_id) REFERENCES customers(ID),
        FOREIGN KEY (salesperson_id) REFERENCES salespersons(ID) );

CREATE TABLE highArchiver (
    ID int NOT NULL AUTO_INCREMENT,
            Name varchar(20) NOT NULL,
            Age int NOT NULL,
            Salary int NOT NULL,
            PRIMARY KEY (ID) );

INSERT INTO salespersons (ID, Name, Age, Salary) VALUES
	(1, 'Abe', 61, 140000),
            (2, 'Bob', 34, 44000),
            (5, 'Chris', 34, 40000),
            (7, 'Dan', 41, 52000),
            (8, 'Ken', 57, 115000),
            (11, 'Joe', 38, 38000);

INSERT INTO customers (ID, Name, City, Industry_Type) VALUES
	(4, 'Samsonic', 'pleasant', 'J'),
	(6, 'Panasung', 'oaktown', 'J'),
	(7, 'Samony', 'jackson', 'B'),
	(9, 'Orange', 'Jackson', 'B');

INSERT INTO orders (Number, order_date, cust_id, salesperson_id, Amount) VALUES
	(10, '1996-02-08', 4,  2, 540),
	(20, '1999-01-30', 4,  8, 1800),
	(30, '1995-07-14', 9,  1, 460),
	(40, '1998-01-29', 7,  2, 2400),
	(50, '1998-03-02', 6,  7, 600),
	(60, '1998-02-03', 6,  7, 720),
	(70, '1998-06-05', 9,  7, 150);


