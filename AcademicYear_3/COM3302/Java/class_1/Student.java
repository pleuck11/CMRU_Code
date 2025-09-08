package COM3302.Java.class_1;

class Student {
    // คุณสมบัติ (ใช้หลักการ Encapsulation โดย private)
    private String id;
    private String name;
    private String section;
    private String projectName;
    private String borrowDate;

    // ตัวสร้าง (Constructor)
    public Student(String id, String name, String section) {
        this.id = id;
        this.name = name;
        this.section = section;
    }

    // เมธอดชื่อ borrowProject() ใช้ในการรับข้อมูล ชื่อภาคนิพนธ์ และวันที่ยืม
    public void borrowProject(String projectName, String borrowDate) {
        this.projectName = projectName;
        this.borrowDate = borrowDate;
    }

    // เมธอด showProject() ใช้ในการแสดงรายละเอียดคุณลักษณะ
    public void showProject() {
        System.out.println("Student ID: " + id);
        System.out.println("Name: " + name);
        System.out.println("Section: " + section);
        System.out.println("Borrowed Project: " + projectName);
        System.out.println("Borrow Date: " + borrowDate);
    }

    // เมธอด main() สำหรับการสร้าง และกำหนดออบเจกต์ Student
    public static void main(String[] args) {
        // สร้างออบเจกต์ของ Student
        Student stu1 = new Student("66143432", "Pocharapon Hakad", "4.2");

        // เรียกใช้งานเมธอด borrowProject()
        stu1.borrowProject("Dormitory System", "08-03-2025");

        // เรียกใช้งานเมธอด showProject()
        stu1.showProject();
    }
}
