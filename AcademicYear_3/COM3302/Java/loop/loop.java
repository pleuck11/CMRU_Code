package COM3302.Java.loop;

import java.util.Scanner;

public class loop {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // ประกาศตัวแปร
        int evenCount = 0,
                oddCount = 0,
                totalCount = 0;
        int evenSum = 0,
                oddSum = 0,
                totalSum = 0;

        System.out.println("Enter Integers (Press Enter without typing anything to stop):");

        // วนลูปเพื่อรับข้อมูลจากผู้ใช้
        while (true) {
            System.out.print("Enter Number: ");
            String input = scanner.nextLine();

            if (input.isEmpty()) {
                break;
            }

            try {
                int number = Integer.parseInt(input);
                totalCount++;
                totalSum += number;

                if (number % 2 == 0) {
                    evenCount++;
                    evenSum += number;
                } else {
                    oddCount++;
                    oddSum += number;
                }
            } catch (NumberFormatException e) {
                System.out.println("Please enter valid integers only.");
            }
        }

        // คำนวณค่าเฉลี่ย
        double totalAvg = totalCount > 0 ? (double) totalSum / totalCount : 0;
        double evenAvg = evenCount > 0 ? (double) evenSum / evenCount : 0;
        double oddAvg = oddCount > 0 ? (double) oddSum / oddCount : 0;

        // แสดงผลล
        System.out.println("\n<<<--- Sum --->>>"); // สรุปผล
        System.out.println("Total number entered: " + totalCount); // จำนวนข้อมูลทั้งหมด
        System.out.println("Even number count: " + evenCount); // จำนวนเลขคู่
        System.out.println("Odd number count: " + oddCount); // จำนวนเลขคี่
        System.out.println("Sum of all number: " + totalSum); // ผลรวมทั้งหมด
        System.out.println("Sum of even number: " + evenSum); // ผลรวมเลขคู่
        System.out.println("Sum of odd number: " + oddSum); // ผลรวมเลขคี่
        System.out.printf("Average of all number: %.2f\n", totalAvg); // ค่าเฉลี่ยทั้งหมด
        System.out.printf("Average of even number: %.2f\n", evenAvg); // ค่าเฉลี่ยเลขคู่
        System.out.printf("Average of odd number: %.2f\n", oddAvg); // ค่าเฉลี่ยเลขคี่

        // ปิด Scanner
        scanner.close();
    }
}
