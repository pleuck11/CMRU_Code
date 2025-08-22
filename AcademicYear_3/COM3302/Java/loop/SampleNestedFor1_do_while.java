package COM3302.Java.loop;

public class SampleNestedFor1_do_while {
    public static void main(String[] args) {
        int i = 1;
        do {
            int j = 1;
            do {
                System.out.println("i = " + i + " j = " + j);
                j++;
            } while (j <= 3);
            i++;
        } while (i <= 2);
    }
}
