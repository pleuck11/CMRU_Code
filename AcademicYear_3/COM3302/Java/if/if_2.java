import java.util.Scanner;

public class if_2 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        // Input gender
        System.out.print("Enter your gender (male/female): ");
        String gender = input.next().toLowerCase();

        // Input weight, height, age
        System.out.print("Enter your weight (kg): ");
        double weight = input.nextDouble();

        System.out.print("Enter your height (cm): ");
        double height = input.nextDouble();

        System.out.print("Enter your age (years): ");
        int age = input.nextInt();

        double bmr;

        // Calculate BMR based on gender
        if (gender.equals("male")) {
            bmr = 66 + (13.7 * weight) + (5 * height) - (6.8 * age);
        } else if (gender.equals("female")) {
            bmr = 665 + (9.6 * weight) + (1.8 * height) - (4.7 * age);
        } else {
            System.out.println("Invalid gender entered.");
            input.close();
            return;
        }

        // Display result
        System.out.printf("Your BMR is: %.2f calories/day\n", bmr);

        input.close();
    }
}
