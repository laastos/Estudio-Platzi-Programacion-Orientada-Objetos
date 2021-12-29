class Driver extends Account
{
  constructor(license, name, document, email, password)
  {
    super(name, document);
    this.license = license;
    this.email = email;
    this.password = password;
  }
}
