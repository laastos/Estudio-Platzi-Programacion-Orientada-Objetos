var car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
car.passenger = 4;
car.printDataCar();

var car2 = new Car("QWE567", new Account("Andrea Herrera", "AND876"));
car2.passenger = 3;
car2.printDataCar();

var uberX = new UberX("AW456", new Account("Andrea Ferran", "ANDA765"), "Chevrolet", "Spark");
uberX.passenger = 4;
uberX.printDataCar();
