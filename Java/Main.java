class Main {
    public static void main(String[] args) {
        System.out.println("Hola mundo");

        Car car = new Car("AMQ123", new Account("Andres Herrera", "AND123"));
        /**car.license = "AMQ123";
        car.driver = "Andres Herrera";**/
        car.setPassenger(4);
        car.printDataCar();

        Car car2 = new Car("QWE567", new Account("Andrea Herrera","ANDA876"));
        car2.setPassenger(4);
        car2.printDataCar();
        

        
        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"),"Chevrolet", "Soni");
        uberX.setPassenger(4);
        uberX.printDataCar();


        UberVan uberVan = new UberVan("GFH564",new Account("Andres Salgado", "AND658"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();



    }
    
}
