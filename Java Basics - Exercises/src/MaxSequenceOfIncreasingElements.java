import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfIncreasingElements {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        int[] array = Arrays.stream(scanner.nextLine().split("\\s+")).mapToInt(Integer::parseInt).toArray();

        int counter = 1;
        int maxCounter = 0;
        int index = 0;

        for (int i = 0; i < array.length - 1; i++){
            if (array[i] < array[i + 1]){
                counter++;
                if (counter > maxCounter){
                    maxCounter = counter;
                    index= i + 1;
                }
            }
            else {
                counter = 1;
            }
        }

        for (int i = index - maxCounter + 1; i <= index; i++){
            System.out.print(array[i] + " ");
        }

    }
}
