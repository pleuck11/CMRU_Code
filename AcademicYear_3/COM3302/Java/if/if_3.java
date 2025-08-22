import java.io.*;

public class if_3 {
    public static void main(String[] args) throws IOException {
        BufferedReader buffer = new BufferedReader(new InputStreamReader(System.in));

        System.out.println("==== Main Menu ====");
        System.out.println("1. Enter Y or N (Switch1)");
        System.out.println("2. Calculator (Add/Subtract/Multiply/Divide)");
        System.out.print("Enter your choice (1 or 2): ");
        String input = buffer.readLine();
        int mainChoice = Integer.parseInt(input);

        if (mainChoice == 1) {
            switch1(buffer);
        } else if (mainChoice == 2) {
            calculator(buffer);
        } else {
            System.out.println("Invalid main menu choice!");
        }
    }

    // === Switch อันที่ 1 ===
    public static void switch1(BufferedReader buffer) throws IOException {
        System.out.print("Enter A [Y] or [N] : ");
        String input = buffer.readLine();
        char answer = input.charAt(0);

        if (answer == 'Y' || answer == 'y') {
            System.out.println("You Enter Y");
        } else if (answer == 'N' || answer == 'n') {
            System.out.println("You Enter N");
        } else {
            System.out.println("Error!");
        }
    }

    // === Switch อันที่ 2 และ อันที่ 3 ===
    public static void calculator(BufferedReader buffer) throws IOException {
        System.out.print("Enter first number: ");
        int a = Integer.parseInt(buffer.readLine());

        System.out.print("Enter second number: ");
        int b = Integer.parseInt(buffer.readLine());

        System.out.println("1: Add");
        System.out.println("2: Subtract");
        System.out.println("3: Multiply");
        System.out.println("4: Divide");
        System.out.print("Enter choice 1..4: ");
        int answer = Integer.parseInt(buffer.readLine());

        double s = 0.0;

        if (answer == 1) {
            s = a + b;
            System.out.println(a + " + " + b + " = " + s);
        } else if (answer == 2) {
            s = a - b;
            System.out.println(a + " - " + b + " = " + s);
        } else if (answer == 3) {
            s = a * b;
            System.out.println(a + " * " + b + " = " + s);
        } else if (answer == 4) {
            if (b != 0) {
                s = (double) a / b;
                System.out.println(a + " / " + b + " = " + s);
            } else {
                System.out.println("Error: Cannot divide by zero!");
            }
        } else {
            System.out.println("Error!");
        }
    }
}
