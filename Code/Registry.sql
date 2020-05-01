 CREATE DATABASE Registration;
 USE Registration;
CREATE TABLE Users
(
  User_ID             INT unsigned NOT NULL AUTO_INCREMENT, 
  Email           VARCHAR(150) NOT NULL, 
  Username           VARCHAR(150) NOT NULL,               
  Passcode         VARCHAR(150) NOT NULL,                                   
  PRIMARY KEY     (User_ID)                               
);
SELECT * From Users;

 SHOW TABLES;
 SHOW DATABASES;
DESCRIBE Users;

/* INSERT QUERY NO: 1 */
INSERT INTO Users(Email, Username, Passcode)
VALUES
(
 'musicgirl@hotmail.com', 'Humphrey', 'Bogart'
);