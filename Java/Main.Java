package Java;

public class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123") );

        car.passenger = 4;
        System.out.println("Car License: " + car.license);
        car.printDataCar();

        Driver driver = new Driver("Carlos Tapias", "avenida falsa 123", "carlos.tapias@elma.com", "carlostapias1");
        driver.printDataUser();
    }
}
