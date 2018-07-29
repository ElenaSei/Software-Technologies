import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        char firstSymbol = scanner.nextLine().charAt(0);
        char secondSymbol = scanner.nextLine().charAt(0);
        char thirdSymbol = scanner.nextLine().charAt(0);

        String result = "" + thirdSymbol + secondSymbol + firstSymbol;

        System.out.println(result);
    }
}
