from car import Car
from account import Account

if __name__ == "__main__":
    print("Hello World")
    
    car = Car("AMS2345", Account("Juan Galvis", "JCG1230"))
    print(vars(car))
    print(vars(car.driver))