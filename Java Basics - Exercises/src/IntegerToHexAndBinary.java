import java.util.Scanner;

public class IntegerToHexAndBinary {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        int input = Integer.parseInt(scanner.next());

        String hexadecimal = Integer.toHexString(input).toUpperCase();
        String binary = Integer.toBinaryString(input);

        System.out.println(hexadecimal);
        System.out.println(binary);
    }
}
