package COM3302.Java.array_1;

public class array_1 {
    public static void main(String[] args) {
        int[] arr = new int[100];
        int count = 0;

        // --- ใช้ for ---
        for (int i = 1; i <= 100; i++) {
            if (i % 3 == 0 && i % 5 == 0) {
                arr[count] = i;
                count++;
            }
        }

        System.out.println("for loop:");
        System.out.println("Total:Numbers divisible by both 3 and 5:");
        for (int i = 0; i < count; i++) {
            System.out.print(arr[i] + " ");
        }
        System.out.println("\nTotal: " + count + " count\n");

        // --- ใช้ while ---
        int[] arr2 = new int[100];
        int index = 1;
        int count2 = 0;
        while (index <= 100) {
            if (index % 3 == 0 && index % 5 == 0) {
                arr2[count2] = index;
                count2++;
            }
            index++;
        }

        System.out.println("while loop:");
        System.out.println("Total:Numbers divisible by both 3 and 5:");
        for (int i = 0; i < count2; i++) {
            System.out.print(arr2[i] + " ");
        }
        System.out.println("\nTotal: " + count2 + " count\n");

        // --- ใช้ do..while ---
        int[] arr3 = new int[100];
        int count3 = 0;
        int j = 1;
        do {
            if (j % 3 == 0 && j % 5 == 0) {
                arr3[count3] = j;
                count3++;
            }
            j++;
        } while (j <= 100);

        System.out.println("do..while loop:");
        System.out.println("Total:Numbers divisible by both 3 and 5:");
        for (int i = 0; i < count3; i++) {
            System.out.print(arr3[i] + " ");
        }
        System.out.println("\nTotal: " + count3 + " count");
    }
}
