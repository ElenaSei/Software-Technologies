import java.util.ArrayList;
import java.util.Scanner;

public class BombNumbers {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        ArrayList<Integer> arr = InputTolist(scanner.nextLine().split("\\s"));

        int bomb = scanner.nextInt();
        int power = scanner.nextInt();

        while (arr.contains(bomb)){
            int index = arr.indexOf(bomb);
            int start = index - power;
            int end = index + power;

            if (start < 0){
                start = 0;
            }
            if (end > arr.size() - 1){
                end = arr.size() - 1;
            }
            arr.subList(start, end + 1).clear();
        }

        System.out.println(Sum(arr));
    }

    private static int Sum(ArrayList<Integer> numbers) {
        int sum = 0;

        for (int i = 0; i < numbers.size(); i++) {
            sum += numbers.get(i);
        }

        return sum;
    }

    private static ArrayList<Integer> InputTolist(String[] strings) {
        ArrayList<Integer> numbers = new ArrayList<Integer>();

        for (int i = 0; i < strings.length; i++) {
            numbers.add(Integer.parseInt(strings[i]));
        }

        return numbers;
    }
}
