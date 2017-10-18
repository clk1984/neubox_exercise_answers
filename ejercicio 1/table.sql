
 CREATE TABLE usersneubox(
            ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
            email varchar(50) NOT NULL UNIQUE,
            password varchar(50) NOT NULL,
            phone varchar(15) NOT NULL,
            company varchar(50) NULL,
            birthdate date NULL

    )


