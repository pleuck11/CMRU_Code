import java.util.Scanner;

public class if_1 {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        // Input weight and height from user
        System.out.print("Enter your weight (kg): ");
        double weight = input.nextDouble();

        System.out.print("Enter your height (cm): ");
        double heightCm = input.nextDouble();

        // Convert cm to meters
        double height = heightCm / 100;

        // Calculate BMI
        double bmi = weight / (height * height);

        // Display result
        System.out.printf("\nYour BMI is: %.2f\n", bmi);

        // Evaluate BMI based on category
        if (bmi < 18.5) {
            System.out.println("Health Evaluation: Underweight");
        } else if (bmi < 25) {
            System.out.println("Health Evaluation: Normal");
        } else if (bmi < 30) {
            System.out.println("Health Evaluation: Overweight");
        } else {
            System.out.println("Health Evaluation: Obese");
        }

        input.close();
    }
}
