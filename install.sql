For table blood_bank;
CREATE TABLE Blood_Bank
(
  Blood_Bank_Name VARCHAR(150) NOT NULL,
  Blood_bank_ID INT NOT NULL,
  Issues DATE NOT NULL,
  PRIMARY KEY (Blood_bank_ID)
);

For table Hospital;
CREATE TABLE Hospital
(
  Address VARCHAR(250) NOT NULL,
  Hospital_Name VARCHAR(150) NOT NULL,
  Hospital_ID INT NOT NULL,
  Phone_number INT NOT NULL,
  PRIMARY KEY (Hospital_ID)
);

For table patient;
CREATE TABLE Patient
(
  F_name VARCHAR(50) NOT NULL,
  L_name VARCHAR(50) NOT NULL,
  Patient_ID INT NOT NULL,
  Phone_number INT NOT NULL,
  Hospital_ID INT NOT NULL,
  PRIMARY KEY (Patient_ID),
  FOREIGN KEY (Hospital_ID) REFERENCES Hospital(Hospital_ID)
);

For table blood;
CREATE TABLE Blood
(
  Type CHAR(2) NOT NULL,
  Cost FLOAT NOT NULL,
  Blood_ID INT NOT NULL,
  Blood_bank_ID INT NOT NULL,
  PRIMARY KEY (Blood_ID),
  FOREIGN KEY (Blood_bank_ID) REFERENCES Blood_Bank(Blood_bank_ID)
);

For table donor;
CREATE TABLE Donor
(
  Donor_ID INT NOT NULL,
  F_name VARCHAR(50) NOT NULL,
  L_name VARCHAR(50) NOT NULL,
  Date_of_Birth DATE NOT NULL,
  Phone_number INT NOT NULL,
  Blood_ID INT NOT NULL,
  PRIMARY KEY (Donor_ID),
  FOREIGN KEY (Blood_ID) REFERENCES Blood(Blood_ID)
);


For table Interacts;
CREATE TABLE Interacts
(
  Blood_bank_ID INT NOT NULL,
  Hospital_ID INT NOT NULL,
  PRIMARY KEY (Blood_bank_ID),
  FOREIGN KEY (Blood_bank_ID) REFERENCES Blood_Bank(Blood_bank_ID),
  FOREIGN KEY (Hospital_ID) REFERENCES Hospital(Hospital_ID)
);



INSERT INTO `blood_bank` (`Blood_Bank_Name`,`Blood_bank_ID`,`Issues`) VALUES ("Urna Institute",862943,"2019-02-24 ");
INSERT INTO `Hospital` (`Address`,`Hospital_Name`,`Hospital_ID`,`Phone_number`) VALUES ("P.O. Box 642, 6594 Ornare, Rd.","Risus LLP",395633,"51343212");
INSERT INTO `Patient` (`F_name`,`L_name`,`Patient_ID`,`Phone_number`,`Hospital_ID`) VALUES ("Jacqueline","Horton",215469,"16110714",395633);
INSERT INTO `Blood` (`Type`,`Cost`,`Blood_ID`,`Blood_bank_ID`) VALUES ("A","111.17",442497, 862943);

INSERT INTO `Donor` (`Donor_ID`,`F_name`,`L_name`,`Date_of_Birth`,`Phone_number`,`Blood_ID`) VALUES (285267,"Barry","Montgomery","1997-10-17 ","16750304",442497);
INSERT INTO `Interacts` (`Blood_bank_ID`,`Hospital_ID`) VALUES (862943, 395633);
