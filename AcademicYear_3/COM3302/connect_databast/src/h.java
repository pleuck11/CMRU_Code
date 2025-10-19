interface Payable {
    double pay();
}

abstract class Employee implements Payable { // base type (polymorphism ผ่าน interface)
    private final String name; // encapsulation: ฟิลด์ private + ไม่มี setter (immutable)
    protected double rate; // คลาสลูกเข้าถึงได้ด้วย protected

    protected Employee(String name, double rate) {
        this.name = name;
        this.rate = rate;
    }

    public String getName() {
        return name;
    }
}

class FullTimeEmployee extends Employee { // inheritance
    private final int days;

    public FullTimeEmployee(String name, double rate, int days) {
        super(name, rate);
        this.days = days;
    }

    @Override
    public double pay() { // polymorphism (override)
        return rate * days; // กฎธุรกิจถูกห่อหุ้มไว้ภายในคลาสนี้
    }
}

class PartTimeEmployee extends Employee {
    private final int hours;

    public PartTimeEmployee(String name, double rate, int hours) {
        super(name, rate);
        this.hours = hours;
    }

    @Override
    public double pay() {
        return rate * hours;
    }
}

class Payroll {
    public static void main(String[] args) {
        Payable p1 = new FullTimeEmployee("Ann", 1500, 20);
        Payable p2 = new PartTimeEmployee("Bob", 200, 60);
        System.out.println(p1.pay()); // 30000.0
        System.out.println(p2.pay()); // 12000.0
    }
}