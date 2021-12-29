package Java;

public class Car {
  private Integer id;
  private String license;
  private Account driver;
  protected Integer passenger;

  public Car(String license, Account driver) {
    this.license = license;
    this.driver = driver;
  }

  public void setPassenger(Integer passenger) {
    if (passenger == 4) {
      this.passenger = passenger;
    } else {
      System.out.println("Debe ser un vehículo 4 pasajeros");
    }
  }

  public void setId(Integer id) {
    this.id = id;
  }

  public String getLicense() {
    return license;
  }

  public void setLicense(String license) {
    this.license = license;
  }

  public Account getDriver() {
    return driver;
  }

  public void setDriver(Account driver) {
    this.driver = driver;
  }

  public Integer getPassenger() {
    return this.passenger;
  }

  public Integer getId() {
    return id;
  }

  void printDataCar() {
    System.out.println("License: " + this.license + " / Name Driver: " + this.driver.name + " / Passengers: " + this.passenger);
  }
}
