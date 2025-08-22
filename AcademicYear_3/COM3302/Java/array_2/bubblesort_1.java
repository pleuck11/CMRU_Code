package COM3302.Java.array_2;

import java.util.Arrays;
import java.util.Scanner;

public class bubblesort_1 {

    // ตั้งค่าเป็น false ถ้าคอนโซลของคุณไม่รองรับ ANSI (เส้นใต้) เช่น cmd บางรุ่นของ Windows
    private static final boolean USE_ANSI = true;

    // ===== Utilities สำหรับการแสดงผล =====
    private static void printHeader(int n) {
        System.out.print("Index   ");
        for (int i = 1; i <= n; i++) System.out.printf("%-4d", i);
        System.out.println();
    }

    /**
     * พิมพ์ตัวเลขหนึ่งช่อง (กว้างคงที่ 4) ถ้า underline=true ให้ขีดเส้นใต้เฉพาะตัวเลขเท่านั้น
     */
    private static void printCell(int value, boolean underline) {
        if (USE_ANSI) {
            if (underline) System.out.print("[4m");
            System.out.printf("%-4d", value);
            if (underline) System.out.print("[0m");
        } else {
            String digits = String.valueOf(value);
            String decorated = underline ? ("_" + digits + "_") : digits;
            int pad = 4 - digits.length() - (underline ? 2 : 0);
            if (pad < 0) pad = 0;
            System.out.print(decorated);
            for (int i = 0; i < pad; i++) System.out.print(" ");
        }
    }

    // พิมพ์อาร์เรย์หนึ่งบรรทัด; ถ้ามีการสลับจะขีดเส้นใต้สมาชิกตำแหน่ง i และ j
    private static void printRow(int[] a, int i, int j, boolean swapped) {
        for (int k = 0; k < a.length; k++) {
            boolean underline = swapped && (k == i || k == j);
            printCell(a[k], underline);
        }
        System.out.println();
    }

    // ================== Bubble Sort (for) ==================
    /**
     * ใช้ลูป for ซ้อนกัน 2 ชั้น (รอบ และ การเปรียบเทียบ)
     */
    public static void bubbleSortForTrace(int[] a) {
        System.out.println("=== Bubble Sort with for-loops ===");
        printHeader(a.length);
        printRow(a, -1, -1, false); // สถานะเริ่มต้น

        for (int round = 1; round < a.length; round++) { // รอบที่ 1..n-1
            System.out.println("Round " + round);
            boolean swappedInThisRound = false;

            for (int j = 0; j < a.length - round; j++) { // เดินเทียบถึงตัวสุดท้ายที่ยังไม่ลงหลัก
                boolean swapped = false;
                if (a[j] > a[j + 1]) {
                    int tmp = a[j]; a[j] = a[j + 1]; a[j + 1] = tmp;
                    swapped = true; swappedInThisRound = true;
                }
                printRow(a, j, j + 1, swapped);
            }

            if (!swappedInThisRound) { // หยุดเร็วถ้าเรียงแล้ว
                System.out.println("(early stop: no swaps in this round)");
                break;
            }
        }
        System.out.println("Final result: " + Arrays.toString(a));
        System.out.println("\n");
    }

    // ================== Bubble Sort (while) ==================
    /**
     * ใช้ลูป while สำหรับทั้งรอบนอกและรอบใน
     */
    public static void bubbleSortWhileTrace(int[] a) {
        System.out.println("=== Bubble Sort with while-loops ===");
        printHeader(a.length);
        printRow(a, -1, -1, false);

        int round = 1;
        boolean sorted = false;
        while (round < a.length && !sorted) { // เงื่อนไขรอบนอก
            System.out.println("Round " + round);
            boolean swappedInThisRound = false;

            int j = 0;
            while (j < a.length - round) { // เงื่อนไขรอบใน
                boolean swapped = false;
                if (a[j] > a[j + 1]) {
                    int tmp = a[j]; a[j] = a[j + 1]; a[j + 1] = tmp;
                    swapped = true; swappedInThisRound = true;
                }
                printRow(a, j, j + 1, swapped);
                j++;
            }

            if (!swappedInThisRound) {
                System.out.println("(early stop: no swaps in this round)");
                sorted = true; // ไม่มีการสลับแล้ว
            }
            round++;
        }
        System.out.println("Final result: " + Arrays.toString(a));
        System.out.println("\n");
    }

    // ================== Bubble Sort (do..while) ==================
    /**
     * ใช้ลูป do..while อย่างน้อย 1 รอบ; ต้องคุมไม่ให้ลูปในวิ่งเมื่อไม่มีคู่เปรียบเทียบ
     */
    public static void bubbleSortDoWhileTrace(int[] a) {
        System.out.println("=== Bubble Sort with do..while-loops ===");
        printHeader(a.length);
        printRow(a, -1, -1, false);

        int round = 1;
        boolean continueOuter;
        if (a.length <= 1) {
            System.out.println("Final result: " + Arrays.toString(a));
            return;
        }

        do { // รอบนอกแบบ do..while
            System.out.println("Round " + round);
            boolean swappedInThisRound = false;

            int j = 0;
            if (a.length - round > 0) {
                do { // รอบในแบบ do..while (รันเมื่อยังมีคู่เปรียบเทียบเท่านั้น)
                    boolean swapped = false;
                    if (a[j] > a[j + 1]) {
                        int tmp = a[j]; a[j] = a[j + 1]; a[j + 1] = tmp;
                        swapped = true; swappedInThisRound = true;
                    }
                    printRow(a, j, j + 1, swapped);
                    j++;
                } while (j < a.length - round);
            }

            if (!swappedInThisRound) {
                System.out.println("(early stop: no swaps in this round)");
                continueOuter = false; // เรียงเสร็จแล้ว
            } else {
                continueOuter = (round + 1) < a.length;
            }
            round++;
        } while (continueOuter);

        System.out.println("Final result: " + Arrays.toString(a));
        System.out.println("\n");
    }

    // ================== main ==================
    // รับอินพุตจากผู้ใช้ (คั่นด้วยเว้นวรรคหรือจุลภาค) แล้วสาธิตทั้ง 3 รูปแบบ
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter integers separated by spaces or commas (ex., 4 10 15 19 3 7 9):");
        String line = sc.nextLine().trim().replaceAll(",", " ");
        if (line.isEmpty()) {
            System.out.println("No input provided.");
            return;
        }

        String[] tokens = line.split("\s+");
        int[] data = new int[tokens.length];
        try {
            for (int i = 0; i < tokens.length; i++) data[i] = Integer.parseInt(tokens[i]);
        } catch (NumberFormatException e) {
            System.out.println("Invalid number detected. Please input only integers.");
            return;
        }

        // ทำสำเนาแล้วสาธิตทั้ง 3 รูปแบบ
        bubbleSortForTrace(data.clone());
        bubbleSortWhileTrace(data.clone());
        bubbleSortDoWhileTrace(data.clone());
    }
}
