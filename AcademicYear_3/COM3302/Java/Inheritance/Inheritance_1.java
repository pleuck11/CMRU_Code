package COM3302.Java.Inheritance;

import java.util.Scanner;

/**
 * Computer Science: Independent Study Project Borrowing Program
 * - Uses Encapsulation
 * - Has an abstract class that enforces showProject()
 * - Has borrowProject() method to input project name and borrow date
 * - main() creates and uses Student object
 *
 * This file has only one public class (Inheritance_1).
 * Other classes are package-private to compile in a single file.
 */
public class Inheritance_1 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // Input student info
        System.out.print("Student ID: ");
        String id = sc.nextLine().trim();

        System.out.print("Full Name: ");
        String name = sc.nextLine().trim();

        System.out.print("Section: ");
        String section = sc.nextLine().trim();

        // Create Student object
        Student st = new Student(id, name, section);

        // Borrow project info
        st.borrowProject(sc);

        // Show details
        st.showProject();

        sc.close();
    }
}

/* ===== Abstract class requires showProject() ===== */
abstract class AbstractProject {
    public abstract void showProject();
}

/* ===== Student class with Encapsulation ===== */
class Student extends AbstractProject {
    // Private fields (Encapsulation)
    private String id;
    private String name;
    private String section;

    // Project borrowing info
    private String projectName;
    private String borrowDate;

    // --- Constructor ---
    public Student(String id, String name, String section) {
        this.id = id;
        this.name = name;
        this.section = section;
    }

    // --- Getters / Setters ---
    public String getId() { return id; }
    public void setId(String id) { this.id = id; }

    public String getName() { return name; }
    public void setName(String name) { this.name = name; }

    public String getSection() { return section; }
    public void setSection(String section) { this.section = section; }

    public String getProjectName() { return projectName; }
    public String getBorrowDate() { return borrowDate; }

    /* Input project name and borrow date */
    public void borrowProject(Scanner sc) {
        System.out.print("Project Name: ");
        this.projectName = sc.nextLine().trim();

        System.out.print("Borrow Date ( Ex., 2025-09-10): ");
        this.borrowDate = sc.nextLine().trim();

        if (this.projectName.isEmpty()) {
            this.projectName = "-";
        }
        if (this.borrowDate.isEmpty()) {
            this.borrowDate = "-";
        }
    }

    /* Display project details (from abstract class) */
    @Override
    public void showProject() {
        System.out.println("\n===== Project Borrowing Details =====");
        System.out.println("Student ID   : " + id);
        System.out.println("Full Name    : " + name);
        System.out.println("Section      : " + section);
        System.out.println("Project Name : " + (projectName == null ? "-" : projectName));
        System.out.println("Borrow Date  : " + (borrowDate == null ? "-" : borrowDate));
        System.out.println("=====================================");
    }
}
