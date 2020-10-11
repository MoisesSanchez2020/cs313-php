--creating the data base--



--drop table FERTILIZE;


CREATE TABLE Fertilize (

 ProductID int,
 ProductName varchar(255),
 ProductType varchar(255),
 ProductPrice int,
 ProductDescription varchar(255)

 PRIMARY KEY (ProductID),
FOREIGN KEY (ProductID) REFERENCES Fertilize(ProductID)

);




INSERT INTO Fertilize (ProductID, ProductName, ProductType, ProductPrice ,ProductDescription)
VALUES (37485, 'Dr.Earth Citrus', 'Organic  Fertilize', 9.99, 'Citrus soil for oranges');

 INSERT INTO Fertilize (ProductID, ProductName, ProductType, ProductPrice , ProductDescription)
VALUES (37485, 'Dr.Earth Roses', 'Organic  Fertilize', 10.99, 'Acid soil ');

INSERT INTO Fertilize (ProductID, ProductName, ProductType, ProductPrice , ProductDescription)
VALUES (37485, 'Dr.Earth Trees', 'Organic  Fertilize', 11.99, 'Evergreen soil ');

INSERT INTO Fertilize (ProductID, ProductName, ProductType, ProductPrice , ProductDescription)
VALUES (37485, 'Dr.Earth All Flowers', 'Organic  Fertilize', 8.99, 'Good for everything');



--CREATE TABLE Users (
    --userId int,
    --userCode int,
    --userZipcode int,
    --userNumeber int
--);

----INSERT INTO  Users (userId, userCode, userZipcode, userNumber)
--VALUES  (0001, 202010, 94403, 100);--




CREATE TABLE CustomerInfo (

ProductosID int,

Productname varchar,

Class varchar(255),

StateUs varchar(255),

County varchar(255),

 Living_Year VARCHAR(255)

 PRIMARY KEY (ProductosID),
FOREIGN KEY (ProductosID) REFERENCES ClientesInfo(ProductosID)

);


INSERT INTO CustomerInfo (ProductosID, Productname, Class, StateUs, County, Living_Year)

VALUES (111, 'Tierra Soil', 'Citrus', 'California', 'San Mateo', '2020');

INSERT INTO CustomerInfo (ProductosID, Productname, Class, StateUS, County, Living_Year)

VALUES (121, 'Water Soil', 'Flowers', 'Utah', 'Sandy', '2019');

INSERT INTO CustomerInfo (ProductosID, Productname, Class, StateUs, County, Living_Year)

VALUES (131, 'Alien Soil', 'WaterPlants', 'Idaho', 'Idaho falls', '2018');


