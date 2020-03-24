 CREATE DATABASE Boomer;
USE Boomer;

CREATE TABLE XMLAddresses #--This is just a dummy table to see how sql data is read.
( 
  Address_Identifier              INT unsigned NOT NULL AUTO_INCREMENT,
  Address          VARCHAR(100)  ,             
  PRIMARY KEY     (Address_Identifier)                               
);
 DESCRIBE XMLAddresses;
 SHOW TABLES;
 SHOW DATABASES;
 

INSERT INTO XMLAddresses(Address) VALUES ("192.168.1.1"); 
 INSERT INTO XMLAddresses(Address) VALUES ("04:A1:51:78:5A:FB"); 
 INSERT INTO XMLAddresses(Address) VALUES ("192.168.1.2"); 
 INSERT INTO XMLAddresses(Address) VALUES ("80:37:73:DA:B2:0F"); 
 INSERT INTO XMLAddresses(Address) VALUES ("192.168.1.6"); 
 INSERT INTO XMLAddresses(Address) VALUES ("F8:DC:7A:04:91:66"); 
 INSERT INTO XMLAddresses(Address) VALUES ("192.168.1.45"); 
 INSERT INTO XMLAddresses(Address) VALUES ("00:17:88:72:84:06"); 
 INSERT INTO XMLAddresses(Address) VALUES ("192.168.1.46"); 
 

  SELECT * FROM XMLAddresses;
