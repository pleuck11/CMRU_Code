package COM3302.Java.loop;

public class SampleNestedFor1_wile {
    public static void main(String[] args) {
        int i = 1;
        while (i <= 2) {
            for (int j = 1; j <= 3; j++) {
                System.out.println("i = " + i + " j = " + j);
            }
            i++;
        }
    }
}
