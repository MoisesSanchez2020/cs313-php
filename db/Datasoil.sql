

--SOIL--

INSERT INTO Soil(soilname)
VALUES('Dr.Earth citrus');

INSERT INTO Soil(soilname)
VALUES('Dr.Earth Catus');

INSERT INTO Soil(soilname)
VALUES('Dr.Earth Roses');

INSERT INTO Soil(soilname)
VALUES('Dr.Earth Palm');


--Fertilize--


INSERT INTO Fertilize(fertname)
VALUES('Dr.Earth SuperG');

INSERT INTO Fertilize(fertname)
VALUES('Dr.Earth SuperT');


INSERT INTO Fertilize(fertname)
VALUES('Dr.Earth SuperL');

INSERT INTO Fertilize(fertname)
VALUES('Dr.Earth SuperM');

--Pest control--



INSERT INTO PestControl(pestname)
VALUES('Dr.Earth kill bugs');


INSERT INTO PestControl(pestname)
VALUES('Dr.Earth kill rats');

INSERT INTO PestControl(pestname)
VALUES('Dr.Earth kill flyies');

INSERT INTO PestControl(pestname)
VALUES('Dr.Earth kill Everything');




--PRODUCTS--

INSERT INTO  Products(ProductId, ProductName, ProductZone, Productprice, ProductDesc)
VALUES (001,'Dr.Earth citrus',  'Zone 1','$9.99', 'Good for Citrus');


INSERT INTO  Products(ProductId, ProductName, ProductZone, Productprice, ProductDesc)
VALUES (002,'Dr.Earth SuperG',  'Zone 3','$10.99', 'Good for Gplants');

INSERT INTO  Products(ProductId, ProductName, ProductZone, Productprice, ProductDesc)
VALUES (003,'Dr.Earth Roses',  'Zone 1','$9.99', 'Good for Roses');

INSERT INTO  Products(ProductId, ProductName, ProductZone, Productprice, ProductDesc)
VALUES (003,'Dr.Earth kill rats',  'Zone 4','$8.99', 'Good for kills rats');



SELECT Soil.soilname, Fertilize.fertname, PestControl.pestname
FROM Products
INNER JOIN  soil
On Products.ProductNumber=Soil.ProductId 
WHERE Products.ProductDesc='Good for Roses';

