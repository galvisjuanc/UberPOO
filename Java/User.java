package Java;

public class User extends Account{
    public User(String name, String document, String email, String password) {
        super(name, document, email, password);
    }

    void printDataUser() {
        System.out.println("Document driver: " + document + " Name driver: " + name + " E-mail: " + email + " Password: " + password);
    }
}
