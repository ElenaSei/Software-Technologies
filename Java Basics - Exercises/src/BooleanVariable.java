import java.util.Scanner;

public class BooleanVariable {
    public static void main (String[] args){
        Scanner scanner = new Scanner(System.in);

        Boolean result = Boolean.parseBoolean(scanner.next());

        if (result){
            System.out.println("Yes");
        }
        else{
            System.out.println("No");
        }
    }
}
