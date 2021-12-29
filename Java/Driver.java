package Java;

public class Driver extends Account {
  public String licenseNumber;

  public Driver(String licenseNumber, String name, String document, String email, String password) {
    super(name, document, email, password);
    this.licenseNumber = licenseNumber;
  }

}
