
DROP TABLE IF EXISTS Cars;

USE CarRentalDB;

CREATE TABLE Cars (
    CarID INT PRIMARY KEY IDENTITY,
    Model VARCHAR(255),
    PricePerMonth FLOAT,
	Mileage INT,
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
    MileageLite VARCHAR(50),           
    MileageStandard DECIMAL(10, 2),        
    MileagePlus DECIMAL(10, 2),            
    MileageUnlimited DECIMAL(10, 2)       
);

INSERT INTO Cars (Model, PricePerMonth, Seats, Mileage, AirConditioning, TransmissionType, FuelType, BodyType, DriveTrain, EngineCapacity, Colour, ZeroToHundred, FuelEfficiency, MileageLite, MileageStandard, MileagePlus, MileageUnlimited)
VALUES
('Tesla Model X', 800, 4,45000,  1, 'Automatic', 'Electric', 'SUV', 'AWD', '1600 CC', 'Black', '8 s', '7.5 L/100KM', 'Free', 1500.00, 2000.00, 500.00),
('Honda Civic', 500, 5,3100, 1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '1800 CC', 'Silver', '10 s', '6.5 L/100KM', 'Free', 1000.00, 1500.00, 300.00),
('Toyota Corolla', 450, 5,57760,  1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '1800 CC', 'White', '10 s', '6.7 L/100KM', 'Free', 900.00, 1400.00, 250.00),
('Ford Mustang', 1200, 4,980, 1, 'Manual', 'Petrol', 'Coupe', 'RWD', '5000 CC', 'Red', '4 s', '12 L/100KM', 'Free', 2000.00, 2500.00, 1000.00),
('Chevrolet Camaro', 1100, 4,13000, 1, 'Manual', 'Petrol', 'Coupe', 'RWD', '6200 CC', 'Yellow', '4.2 s', '13 L/100KM', 'Free', 1900.00, 2400.00, 950.00),
('BMW 3 Series', 900, 5,44000, 1, 'Automatic', 'Petrol', 'Sedan', 'AWD', '2000 CC', 'Blue', '7.2 s', '5.9 L/100KM', 'Free', 1600.00, 2100.00, 800.00),
('Audi A4', 950, 5,2000, 1, 'Automatic', 'Petrol', 'Sedan', 'AWD', '2000 CC', 'Grey', '7.1 s', '5.8 L/100KM', 'Free', 1700.00, 2200.00, 850.00),
('Mercedes-Benz C-Class', 1000, 5,99000, 1, 'Automatic', 'Petrol', 'Sedan', 'AWD', '2000 CC', 'Black', '6.9 s', '6.3 L/100KM', 'Free', 1800.00, 2300.00, 900.00),
('Volkswagen Golf', 700, 5,64000, 1, 'Automatic', 'Diesel', 'Hatchback', 'FWD', '2000 CC', 'Green', '8.5 s', '4.8 L/100KM', 'Free', 1300.00, 1800.00, 650.00),
('Hyundai Sonata', 550, 5,5000, 1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '2400 CC', 'Blue', '9 s', '7.1 L/100KM', 'Free', 1100.00, 1600.00, 500.00),
('Kia Optima', 530, 5, 5000, 1, 'Automatic', 'Petrol', 'Sedan', 'FWD', '2400 CC', 'White', '9.5 s', '7.2 L/100KM', 'Free', 1050.00, 1550.00, 480.00),
('Nissan Leaf', 600, 5,5000, 1, 'Automatic', 'Electric', 'Hatchback', 'FWD', 'Electric Motor', 'Silver', '7.9 s', '0 L/100KM', 'Free', 1200.00, 1700.00, 400.00),
('Subaru Outback', 650, 5,5000, 1, 'Automatic', 'Petrol', 'SUV', 'AWD', '2500 CC', 'Green', '10 s', '7.4 L/100KM', 'Free', 1300.00, 1800.00, 600.00),
('Mazda CX-5', 700, 5,5000, 1, 'Automatic', 'Petrol', 'SUV', 'AWD', '2000 CC', 'Red', '9 s', '6.9 L/100KM', 'Free', 1400.00, 1900.00, 700.00),
('Dodge Charger', 1000, 5, 5000, 1, 'Automatic', 'Petrol', 'Sedan', 'RWD', '3700 CC', 'Black', '5.8 s', '9.4 L/100KM', 'Free', 1800.00, 2300.00, 950.00),
('Lexus ES', 900, 5,5000, 1, 'Automatic', 'Hybrid', 'Sedan', 'FWD', '2500 CC', 'White', '8.6 s', '5.5 L/100KM', 'Free', 1600.00, 2100.00, 850.00),
('Porsche 911', 1500, 4,5000, 1, 'Manual', 'Petrol', 'Coupe', 'RWD', '3000 CC', 'Blue', '3.4 s', '10 L/100KM', 'Free', 2000.00, 2500.00, 1400.00),
('Jaguar XF', 1200, 5, 5000, 1, 'Automatic', 'Diesel', 'Sedan', 'RWD', '2200 CC', 'Silver', '8.4 s', '5.1 L/100KM', 'Free', 1900.00, 2400.00, 1100.00),
('Fiat 500', 300, 4, 5000, 1, 'Manual', 'Petrol', 'Hatchback', 'FWD', '1400 CC', 'Pink', '12.9 s', '6.2 L/100KM', 'Free', 700.00, 1200.00, 280.00),
('Renault Clio', 400, 5, 5000, 1, 'Automatic', 'Diesel', 'Hatchback', 'FWD', '1500 CC', 'Orange', '11.8 s', '3.6 L/100KM', 'Free', 800.00, 1300.00, 350.00);

SELECT * FROM Cars;
