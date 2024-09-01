USE CarRentalDB;


CREATE TABLE Cars (
    CarID INT PRIMARY KEY IDENTITY,
    Model VARCHAR(255),
    PricePerYear FLOAT,
    Seats INT,
    AirConditioning BIT,
    TransmissionType VARCHAR(50),
    FuelType VARCHAR(50)
);

INSERT INTO Cars (Model, PricePerYear, Seats, AirConditioning, TransmissionType, FuelType)
VALUES
('Tesla Model X', 800, 4, 1, 'Automatic', 'Electric'),
('Honda Civic', 500, 5, 1, 'Automatic', 'Petrol'),
('Toyota Corolla', 450, 5, 1, 'Automatic', 'Petrol'),
('Ford Mustang', 1200, 4, 1, 'Manual', 'Petrol'),
('Chevrolet Camaro', 1100, 4, 1, 'Manual', 'Petrol'),
('BMW 3 Series', 900, 5, 1, 'Automatic', 'Petrol'),
('Audi A4', 950, 5, 1, 'Automatic', 'Petrol'),
('Mercedes-Benz C-Class', 1000, 5, 1, 'Automatic', 'Petrol'),
('Volkswagen Golf', 700, 5, 1, 'Automatic', 'Diesel'),
('Hyundai Sonata', 550, 5, 1, 'Automatic', 'Petrol'),
('Kia Optima', 530, 5, 1, 'Automatic', 'Petrol'),
('Nissan Leaf', 600, 5, 1, 'Automatic', 'Electric'),
('Subaru Outback', 650, 5, 1, 'Automatic', 'Petrol'),
('Mazda CX-5', 700, 5, 1, 'Automatic', 'Petrol'),
('Dodge Charger', 1000, 5, 1, 'Automatic', 'Petrol'),
('Lexus ES', 900, 5, 1, 'Automatic', 'Hybrid'),
('Porsche 911', 1500, 4, 1, 'Manual', 'Petrol'),
('Jaguar XF', 1200, 5, 1, 'Automatic', 'Diesel'),
('Fiat 500', 300, 4, 1, 'Manual', 'Petrol'),
('Renault Clio', 400, 5, 1, 'Automatic', 'Diesel');

SELECT * FROM Cars;

