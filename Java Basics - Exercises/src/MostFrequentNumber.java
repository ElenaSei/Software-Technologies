import java.util.Arrays;
import java.util.Scanner;

public class MostFrequentNumber {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        int[] array = Arrays.stream(scanner.nextLine().split("\\s+")).mapToInt(Integer::parseInt).toArray();

        int counter = 0;
        int maxCounter = 0;
        int num = 0;

        for (int i = 0; i < array.length; i++){
            for (int j = i; j < array.length; j++){
                if (array[i] == array[j]){
                    counter++;
                }
            }
            if (counter > maxCounter){
                maxCounter = counter;
                num = array[i];
            }
            counter = 0;
        }

        System.out.println(num);

    }
}
