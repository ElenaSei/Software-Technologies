import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfEqualElements {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        int[] array = Arrays.stream(scanner.nextLine().split("\\s+")).mapToInt(Integer::parseInt).toArray();

        int counter = 1;
        int maxCounter = 0;
        int num = 0;

        for (int i = 0; i < array.length - 1; i++){
            if (array[i] == array[i + 1]){
                counter++;
                if (counter > maxCounter){
                    maxCounter = counter;
                    num = array[i];
                }
            }
            else {
                counter = 1;
            }
        }

        for (int i = 0; i < maxCounter; i++){
            System.out.print(num + " ");
        }
    }
}
