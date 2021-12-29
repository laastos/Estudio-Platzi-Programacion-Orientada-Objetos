package Java;

class Main {
  public static void main(String[] args) {
    System.out.println("Hola Mundo");

    Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
    car.setPassenger(3);
    car.printDataCar();

    System.out.println("");

    UberX car2 = new UberX("QWE567", new Account("Andrea Herrera", "AND876"), "Chevrolet", "Spark");
    car2.setPassenger(4);
    car2.printDataCar();

    System.out.println("");

    UberVan uberVan = new UberVan("FGH345", new Account("Anthony Herrera", "ANT159"));
    uberVan.setPassenger(6);
    uberVan.printDataCar();

    System.out.println("");

    User user = new User("Usuario 1", "U123", "user@uberx.com", "123456");
    user.printData();
  }
}
