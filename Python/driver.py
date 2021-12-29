from account import Account

class Driver(Account):
  license = str

  def __init__(self, license, name, document, email, password):
    super().__init__(name, document)
    self.license = license
    self.email = email
    self.password = password
