CREATE TABLE pizza (

    address varchar(200) not null ,
    name varchar(255) not null,
    size varchar(255) not null,
    email varchar(255) not null,
    cheese varchar(100) not null,
    toppings varchar(255) not null,
    primary key(email)
);
INSERT INTO pizza(address,name,size,email,cheese,toppings)
VALUES
('16 Stollar', 'Bobby', 'pan','firstandlast@email.ca', 'no cheese', 'onions');