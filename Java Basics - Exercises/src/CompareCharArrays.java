import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args){
        Scanner scanner = new Scanner(System.in);

        char[] firstArr = scanner.nextLine().replace(" ", "").toCharArray();
        char[] secondArr = scanner.nextLine().replace(" ", "").toCharArray();

        for (int i = 0; i < Math.min(firstArr.length, secondArr.length); i++){
            if (firstArr[i] < secondArr[i]){
                System.out.println(firstArr);
                System.out.println(secondArr);
                return;
            }else if (firstArr[i] > secondArr[i]){
                System.out.println(secondArr);
                System.out.println(firstArr);
                return;
            }
        }

        if (firstArr.length < secondArr.length){
            System.out.println(firstArr);
            System.out.println(secondArr);
        }else {
            System.out.println(secondArr);
            System.out.println(firstArr);
        }
    }
}
