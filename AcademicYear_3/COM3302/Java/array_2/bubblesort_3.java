package COM3302.Java.array_2;

import java.util.Scanner;

/**
 * โปรแกรมรายงานคะแนนแบบอาร์เรย์ 1 มิติ
 * ฟิลด์: Code, Name, Test1(เต็ม 30), Test2(เต็ม 30), Final(เต็ม 40)
 * คำนวณ Total = Test1 + Test2 + Final และแสดง Average ของแต่ละคอลัมน์
 * หมายเหตุ: เปลี่ยน package ให้ตรงกับโปรเจกต์ของคุณได้
 */
public class bubblesort_3 {

    // อ่านคะแนนแบบมีการตรวจสอบช่วง 0..max
    private static int readScore(Scanner sc, String prompt, int max) {
        while (true) {
            System.out.print(prompt);
            if (sc.hasNextInt()) {
                int v = sc.nextInt();
                if (v >= 0 && v <= max) return v;
                System.out.println("  * Invalid: must be 0.." + max);
            } else {
                System.out.println("  * Please enter an integer number.");
                sc.next(); // ทิ้ง token ที่ไม่ใช่ตัวเลข
            }
        }
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("How many students? : ");
        int n = sc.nextInt();
        sc.nextLine(); // consume endline
        if (n <= 0) {
            System.out.println("No data.");
            return;
        }

        // อาร์เรย์ 1 มิติสำหรับแต่ละฟิลด์
        String[] code = new String[n];
        String[] name = new String[n];
        int[] t1 = new int[n];
        int[] t2 = new int[n];
        int[] fin = new int[n];
        int[] total = new int[n];

        // เก็บผลรวมเพื่อคำนวณค่าเฉลี่ย
        int sumT1 = 0, sumT2 = 0, sumFin = 0, sumTotal = 0;

        System.out.println("\n=== Input Data ===");
        for (int i = 0; i < n; i++) {
            System.out.println("Student #" + (i + 1));
            System.out.print("  Code : ");
            code[i] = sc.nextLine().trim();
            System.out.print("  Name : ");
            name[i] = sc.nextLine().trim();

            t1[i] = readScore(sc, "  Test 1 (0..30) : ", 30);
            t2[i] = readScore(sc, "  Test 2 (0..30) : ", 30);
            fin[i] = readScore(sc, "  Final  (0..40) : ", 40);
            sc.nextLine(); // รับ endline ที่ค้าง

            total[i] = t1[i] + t2[i] + fin[i];
            sumT1 += t1[i];
            sumT2 += t2[i];
            sumFin += fin[i];
            sumTotal += total[i];
        }

        double avgT1 = sumT1 / (double) n;
        double avgT2 = sumT2 / (double) n;
        double avgFin = sumFin / (double) n;
        double avgTotal = sumTotal / (double) n;

        // ===== แสดงรายงาน =====
        System.out.println();
        String line = "-".repeat(78);
        System.out.println(line);
        System.out.printf("%-12s %-24s %7s %7s %7s %7s\n", "Code", "Name", "Test1", "Test2", "Final", "Total");
        System.out.println(line);

        for (int i = 0; i < n; i++) {
            System.out.printf("%-12s %-24s %7d %7d %7d %7d\n",
                    code[i], name[i], t1[i], t2[i], fin[i], total[i]);
        }
        System.out.println(line);
        System.out.printf("%-36s %7.2f %7.2f %7.2f %7.2f\n", "Average", avgT1, avgT2, avgFin, avgTotal);
        System.out.println(line);
    }
}
