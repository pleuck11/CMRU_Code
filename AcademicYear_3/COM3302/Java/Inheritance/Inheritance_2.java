package COM3302.Java.Inheritance;

import java.util.Scanner;

public class Inheritance_2 {
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

        // Borrow project info via interface method
        st.borrowProject(sc);

        // Show details via interface method
        st.showProject();

        sc.close();
    }
}

/* ===== interface กำหนดสัญญาให้ต้องมีเมธอด borrowProject() และ showProject() ===== */
interface ProjectOperations {
    void borrowProject(Scanner sc);
    void showProject();
}

/* ===== คลาส Student ใช้หลักการ Encapsulation และ implements interface ===== */
class Student implements ProjectOperations {
    private String id;
    private String name;
    private String section;

    private String projectName;
    private String borrowDate;

    public Student(String id, String name, String section) {
        this.id = id;
        this.name = name;
        this.section = section;
    }

    public String getId() { return id; }
    public void setId(String id) { this.id = id; }

    public String getName() { return name; }
    public void setName(String name) { this.name = name; }

    public String getSection() { return section; }
    public void setSection(String section) { this.section = section; }

    public String getProjectName() { return projectName; }
    public String getBorrowDate() { return borrowDate; }

    @Override
    public void borrowProject(Scanner sc) {
        System.out.print("Project Name: ");
        this.projectName = sc.nextLine().trim();

        System.out.print("Borrow Date (e.g., 2025-09-10): ");
        this.borrowDate = sc.nextLine().trim();

        if (this.projectName.isEmpty()) {
            this.projectName = "-";
        }
        if (this.borrowDate.isEmpty()) {
            this.borrowDate = "-";
        }
    }

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
