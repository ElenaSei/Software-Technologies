import java.util.Arrays;
import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        char[] array = scanner.nextLine().toCharArray();

        for (int i = 0; i < array.length; i++){
            int ascii = (int)array[i] - 97;
            System.out.println(array[i] + " -> " + ascii);
        }

    }
}
