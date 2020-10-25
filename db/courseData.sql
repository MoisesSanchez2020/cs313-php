

CREATE TABLE course (
id SERIAL PRIMARY KEY,
code VARCHAR(25) NOT NULL UNIQUE,
name  VARCHAR(100) NOT NULL,
 ProductID int,
 ProductName varchar(255),
 ProductType varchar(255),
 ProductPrice int,
 ProductDescription varchar(255)



);

CREATE TABLE note (
    id SERIAL PRIMARY KEY,
    course_id INT NOT NULL REFERENCES course(id),
    content text NOT NULL
);  

INSERT INTO course(code, name, ProductID) VALUES ('CS 313', 'Web Engenieering II');
INSERT INTO course(code, name) VALUES ('CS 450', 'Machine Learnig and Data Minig'), ('CS 246', 'Software Design and Development'),
('37485','Dr.Earth Citrus', 'Organic  Fertilize');


INSERT INTO note(course_id, content) VALUES (1, 'Today We are learning about dbs');
INSERT INTO note(course_id, content) VALUES (1, 'Inner joins are intersting');
INSERT INTO note(course_id, content) VALUES (2, 'I like neural networks.');

/*

INSERT Fertilize(ProductID, ProductName, ProductType, ProductPrice ,ProductDescription);
VALUES (37485, 'Dr.Earth Citrus', 'Organic  Fertilize', 9.99, 'Citrus soil for oranges');

---IQGRENN DATABASE--
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



INSERT course (ProductID, ProductName, ProductType, ProductPrice ,ProductDescription)
VALUES (37485, 'Dr.Earth Citrus', 'Organic  Fertilize', 9.99, 'Citrus soil for oranges');

 INSERT INTO Fertilize (ProductID, ProductName, ProductType, ProductPrice , ProductDescription)
VALUES (37485, 'Dr.Earth Roses', 'Organic  Fertilize', 10.99, 'Acid soil ');

INSERT INTO Fertilize (ProductID, ProductName, ProductType, ProductPrice , ProductDescription)
VALUES (37485, 'Dr.Earth Trees', 'Organic  Fertilize', 11.99, 'Evergreen soil ');

INSERT INTO Fertilize (ProductID, ProductName, ProductType, ProductPrice , ProductDescription)
VALUES (37485, 'Dr.Earth All Flowers', 'Organic  Fertilize', 8.99, 'Good for everything');



INSERT INTO CustomerInfo (ProductosID, Productname, Class, StateUs, County, Living_Year)
VALUES (111, 'Tierra Soil', 'Citrus', 'California', 'San Mateo', '2020');

INSERT INTO CustomerInfo (ProductosID, Productname, Class, StateUS, County, Living_Year)
VALUES (121, 'Water Soil', 'Flowers', 'Utah', 'Sandy', '2019');

INSERT INTO CustomerInfo (ProductosID, Productname, Class, StateUs, County, Living_Year)
VALUES (131, 'Alien Soil', 'WaterPlants', 'Idaho', 'Idaho falls', '2018');







-- HOW TO SELECT DATA


-- SELECT * FROM note n JOIN course c ON n.course_id  = c.id;

/*  SELECT * FROM note n 
JOIN course c ON n.course_id  = c.id
WHERE c.code = 'CS 313';  */


/* SELECT n.content FROM note n 
JOIN course c ON n.course_id  = c.id
WHERE c.code = 'CS 313'; */


/*  SELECT c.name, n.content FROM note n 
JOIN course c ON n.course_id  = c.id
WHERE c.code = 'CS 313';   */


/*SELECT c.code, c.name, n.content FROM note n 
JOIN course c ON n.course_id  = c.id
WHERE c.id = 1;  */ 