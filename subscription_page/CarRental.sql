USE CarRentalDB;

DROP TABLE IF EXISTS Cars;

CREATE TABLE Cars (
    CarID INT PRIMARY KEY IDENTITY,
    Model VARCHAR(255),
    PricePerYear FLOAT,
    Seats INT,
    AirConditioning BIT,
    TransmissionType VARCHAR(50),
    FuelType VARCHAR(50),
    BodyType VARCHAR(50),
    DriveTrain VARCHAR(50),
    EngineCapacity VARCHAR(50),
    Colour VARCHAR(50),
    ZeroToHundred VARCHAR(50),
    FuelEfficiency VARCHAR(50),
    MonthlyPlan VARCHAR(50)
);

INSERT INTO Cars (Model, PricePerYear, Seats, AirConditioning, TransmissionType, FuelType, BodyType, DriveTrain, EngineCapacity, Colour, ZeroToHundred, FuelEfficiency, MonthlyPlan)
VALUES
('Tesla Model X', 800, 4, 1, 'Automatic', 'Electric', 'SUV', 'AWD', '1600 CC', 'Black', '8 s', '7.5 L/100KM', 'RM 300/mo'),
('Honda Civic', 500, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '1800 CC', 'Silver', '10 s', '6.5 L/100KM', 'RM 250/mo'),
('Toyota Corolla', 450, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '1800 CC', 'White', '10 s', '6.7 L/100KM', 'RM 200/mo'),
('Ford Mustang', 1200, 4, 1, 'Manual', 'Petrol', 'Coupe', 'RWD', '5000 CC', 'Red', '4 s', '12 L/100KM', 'RM 1000/mo'),
('Chevrolet Camaro', 1100, 4, 1, 'Manual', 'Petrol', 'Coupe', 'RWD', '6200 CC', 'Yellow', '4.2 s', '13 L/100KM', 'RM 950/mo'),
('BMW 3 Series', 900, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'AWD', '2000 CC', 'Blue', '7.2 s', '5.9 L/100KM', 'RM 800/mo'),
('Audi A4', 950, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'AWD', '2000 CC', 'Grey', '7.1 s', '5.8 L/100KM', 'RM 850/mo'),
('Mercedes-Benz C-Class', 1000, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'AWD', '2000 CC', 'Black', '6.9 s', '6.3 L/100KM', 'RM 900/mo'),
('Volkswagen Golf', 700, 5, 1, 'Automatic', 'Diesel', 'Hatchback', 'FWD', '2000 CC', 'Green', '8.5 s', '4.8 L/100KM', 'RM 650/mo'),
('Hyundai Sonata', 550, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '2400 CC', 'Blue', '9 s', '7.1 L/100KM', 'RM 500/mo'),
('Kia Optima', 530, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '2400 CC', 'White', '9.5 s', '7.2 L/100KM', 'RM 480/mo'),
('Nissan Leaf', 600, 5, 1, 'Automatic', 'Electric', 'Hatchback', 'FWD', 'Electric Motor', 'Silver', '7.9 s', '0 L/100KM', 'RM 400/mo'),
('Subaru Outback', 650, 5, 1, 'Automatic', 'Petrol', 'SUV', 'AWD', '2500 CC', 'Green', '10 s', '7.4 L/100KM', 'RM 600/mo'),
('Mazda CX-5', 700, 5, 1, 'Automatic', 'Petrol', 'SUV', 'AWD', '2000 CC', 'Red', '9 s', '6.9 L/100KM', 'RM 700/mo'),
('Dodge Charger', 1000, 5, 1, 'Automatic', 'Petrol', 'Sedan', 'RWD', '3700 CC', 'Black', '5.8 s', '9.4 L/100KM', 'RM 950/mo'),
('Lexus ES', 900, 5, 1, 'Automatic', 'Hybrid', 'Sedan', 'FWD', '2500 CC', 'White', '8.6 s', '5.5 L/100KM', 'RM 850/mo'),
('Porsche 911', 1500, 4, 1, 'Manual', 'Petrol', 'Coupe', 'RWD', '3000 CC', 'Blue', '3.4 s', '10 L/100KM', 'RM 1400/mo'),
('Jaguar XF', 1200, 5, 1, 'Automatic', 'Diesel', 'Sedan', 'RWD', '2200 CC', 'Silver', '8.4 s', '5.1 L/100KM', 'RM 1100/mo'),
('Fiat 500', 300, 4, 1, 'Manual', 'Petrol', 'Hatchback', 'FWD', '1400 CC', 'Pink', '12.9 s', '6.2 L/100KM', 'RM 280/mo'),
('Renault Clio', 400, 5, 1, 'Automatic', 'Diesel', 'Hatchback', 'FWD', '1500 CC', 'Orange', '11.8 s', '3.6 L/100KM', 'RM 350/mo');

Select * from Cars