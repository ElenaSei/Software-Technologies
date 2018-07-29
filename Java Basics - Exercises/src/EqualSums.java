import java.util.Arrays;
import java.util.Scanner;

public class EqualSums {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        int[] arr = Arrays.stream(scanner.nextLine().split(" ")).mapToInt(Integer::parseInt).toArray();

        if (arr.length == 1) {
            System.out.println("0");
        }else{
            boolean indexExists = false;

            for (int i = 0; i < arr.length; i++){
                int[] arrLeft = Arrays.copyOfRange(arr, 0, i);
                int[] arrRight = Arrays.copyOfRange(arr, i + 1, arr.length);
                if (Arrays.stream(arrLeft).sum() == Arrays.stream(arrRight).sum()){
                    System.out.println(i);
                    indexExists = true;
                    break;
                }
            }

            if (!indexExists){
                System.out.println("no");
            }
        }
    }
}
