-- SQL QUERY FOR CREATING THE TABLES 
CREATE TABLE [Customers] (
[customer_id] integer PRIMARY KEY,
[first_name] varchar(255),
[last_name] varchar(255),
[email] varchar(255),
[phone] varchar(255),
[address] varchar(255)
);
CREATE TABLE [Orders] (
[order_id] integer PRIMARY KEY,
[order_date] date,
[customer_id] integer,
[employee_id] integer,
[total_amount] integer,
[status] varchar(255)
);
CREATE TABLE [Clothing_Items] (
[item_id] integer PRIMARY KEY,
[item_name] varchar(255),
[category] varchar(255),
[size] varchar(255),
[color] varchar(255),
[price] decimal(10,2),
[stock_quantity] integer,
[supplier_id] integer
);
CREATE TABLE [Order_Items] (
[order_item_id] integer PRIMARY KEY,
[order_id] integer,
[item_id] integer,
[quantity] integer,
[item_price] decimal(10,2)
);
CREATE TABLE [Employees] (
[employee_id] integer PRIMARY KEY,
[first_name] varchar(255),
[last_name] varchar(255),
[email] varchar(255),
[phone] varchar(255),
[position] varchar(255)
);
CREATE TABLE [Suppliers] (
[supplier_id] integer PRIMARY KEY,
[supplier_name] varchar(255),
[contact_info] varchar(255)
);


-- SQL QUERY FOR INSERTING RECORDS IN ATABLE
INSERT INTO Customers (customer_id, first_name, last_name, email, phone, address)
VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '555-1234', '123 Elm Street'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '555-5678', '456 Oak Avenue'),
(3, 'Emily', 'Johnson', 'emily.johnson@example.com', '555-8765', '789 Pine Road'),
(4, 'Michael', 'Brown', 'michael.brown@example.com', '555-2345', '101 Maple Street'),
(5, 'Sarah', 'Davis', 'sarah.davis@example.com', '555-3456', '202 Birch Lane');
INSERT INTO Orders (order_id, order_date, customer_id, employee_id, total_amount, status)
VALUES
(1, '2024-09-01', 1, 2, 150, 'Shipped'),
(2, '2024-09-02', 2, 1, 200, 'Pending'),
(3, '2024-09-03', 3, 3, 120, 'Delivered'),
(4, '2024-09-04', 4, 4, 180, 'Cancelled'),
(5, '2024-09-05', 5, 5, 220, 'Processing');
INSERT INTO Clothing_Items (item_id, item_name, category, size, color, price, stock_quantity,
supplier_id)
VALUES
(1, 'Blue Jeans', 'Pants', 'M', 'Blue', 49.99, 100, 1),
(2, 'Red T-Shirt', 'Shirts', 'L', 'Red', 19.99, 200, 2),
(3, 'Black Jacket', 'Outerwear', 'XL', 'Black', 89.99, 50, 3),
(4, 'White Sneakers', 'Footwear', '10', 'White', 69.99, 150, 4),
(5, 'Green Hoodie', 'Outerwear', 'L', 'Green', 59.99, 80, 5);
INSERT INTO Order_Items (order_item_id, order_id, item_id, quantity, item_price) VALUES
(1, 1, 1, 2, 49.99),
(2, 1, 2, 1, 19.99),
(3, 2, 3, 1, 89.99),
(4, 3, 2, 3, 19.99),
(5, 4, 4, 1, 69.99);
INSERT INTO Employees (employee_id, first_name, last_name, email, phone, position)
VALUES
(1, 'Alice', 'Brown', 'alice.brown@example.com', '555-2345', 'Sales Associate'),
(2, 'Bob', 'White', 'bob.white@example.com', '555-3456', 'Manager'),
(3, 'Charlie', 'Green', 'charlie.green@example.com', '555-4567', 'Stock Clerk'),
(4, 'Diana', 'Black', 'diana.black@example.com', '555-5678', 'Customer Service'),
(5, 'Edward', 'Gray', 'edward.gray@example.com', '555-6789', 'Sales Manager');
INSERT INTO Suppliers (supplier_id, supplier_name, contact_info) VALUES
(1, 'ABC Clothing Co.', 'contact@abcclothing.com'),
(2, 'XYZ Apparel Ltd.', 'support@xyzapparel.com'),
(3, 'Fashion Factory', 'info@fashionfactory.com'),
(4, 'Urban Outfitters', 'contact@urbanoutfitters.com'),
(5, 'Streetwear Inc.', 'info@streetwear.com');