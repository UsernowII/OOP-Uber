from car import Car
from account import Account

if  __name__ == "__main__":
    print("hola mundo")

    #car = Car ()
    #car.license = "AMS234"
    #car.driver = "Andres Herrera"
    #print(vars(car))

    #car2 = Car ()
    #car2.license = "QWE567"
    #car2.driver = "Andrea Herrera"
    #print(vars(car2))

    car = Car("AMS234", Account("Andres Herrera", " ANDA876"))
    print(vars(car))
    print(vars(car.driver))

    car2 = Car("QWE567", Account("Andrea Herrera", "ANDI123"))
    print(vars(car2))
    print(vars(car2.driver))