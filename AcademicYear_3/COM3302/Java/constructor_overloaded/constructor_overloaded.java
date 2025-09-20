package COM3302.Java.constructor_overloaded;

public class constructor_overloaded {
    public static void main(String[] args) {
        AreaShape circle = new AreaShape(7); // วงกลม รัศมี = 7
        AreaShape rectangle = new AreaShape(4, 5); // สี่เหลี่ยมผืนผ้า 4 x 5
        AreaShape triangle = new AreaShape(10, 8, true); // สามเหลี่ยม ฐาน=10 สูง=8

        circle.showArea();
        rectangle.showArea();
        triangle.showArea();
    }
}

class AreaShape {
    private enum Type {
        CIRCLE, RECTANGLE, TRIANGLE
    }

    private Type type; // ชนิดรูปทรง
    private double area; // ค่าพื้นที่ที่คำนวณได้

    private Double radius; // วงกลม
    private Double width; // สี่เหลี่ยม (กว้าง)
    private Double height; // สี่เหลี่ยม/สามเหลี่ยม (ยาว/สูง)
    private Double base; // สามเหลี่ยม (ฐาน)

    // ===== Constructor Overloading =====
    public AreaShape(double radius) {
        validatePositive(radius, "radius");
        this.type = Type.CIRCLE;
        this.radius = radius;
        this.area = Math.PI * radius * radius;
    }

    // 2) Rectangle: width x height
    public AreaShape(double width, double height) {
        validatePositive(width, "width");
        validatePositive(height, "height");
        this.type = Type.RECTANGLE;
        this.width = width;
        this.height = height;
        this.area = width * height;
    }

    // 3) Triangle: base x height and a flag to indicate triangle
    public AreaShape(double base, double height, boolean isTriangle) {
        if (!isTriangle) {
            throw new IllegalArgumentException(
                    "For a triangle, please pass true as the third argument (isTriangle).");
        }
        validatePositive(base, "base");
        validatePositive(height, "height");
        this.type = Type.TRIANGLE;
        this.base = base;
        this.height = height;
        this.area = 0.5 * base * height;
    }

    public void showArea() {
        System.out.println("----- Area Details -----");
        switch (type) {
            case CIRCLE:
                System.out.printf(
                        "Shape        : Circle%nRadius       : %.2f%nArea         : %.2f%n%n",
                        radius, area);
                break;
            case RECTANGLE:
                System.out.printf(
                        "Shape        : Rectangle%nWidth x Height : %.2f x %.2f%nArea         : %.2f%n%n",
                        width, height, area);
                break;
            case TRIANGLE:
                System.out.printf(
                        "Shape        : Triangle%nBase x Height  : %.2f x %.2f%nArea         : %.2f%n%n",
                        base, height, area);
                break;
        }
    }

    private void validatePositive(double value, String fieldName) {
        if (value <= 0) {
            throw new IllegalArgumentException(fieldName + " must be greater than 0");
        }
    }
}
