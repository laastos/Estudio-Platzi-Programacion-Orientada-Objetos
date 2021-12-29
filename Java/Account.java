package Java;

public class Account {
  Integer id;
  String name;
  String document;
  String email;
  String password;

  public Account(String name, String document) {
    this.name = name;
    this.document = document;
  }

  public Account(String name, String document, String email, String password) {
    this.name = name;
    this.document = document;
    this.email = email;
    this.password = password;
  }

  public void printData() {
    System.out.println("Name: " + this.name);
    System.out.println("Document: " + this.document);
    System.out.println("E-mail: " + this.email);
  }
}
