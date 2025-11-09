// ไฟล์: main.dart

void main() {
  // ประกาศฟังก์ชันหลัก

  print("++Hello, CMRU++");

  // --- ส่วนของ Map ---
  // key:value
  // แก้ไข: การประกาศ Map ต้องระบุ Type และใช้ {} หรือ Map()
  Map<String, String> capitals = {};

  // แก้ไข: การกำหนดค่าต้องใช้เครื่องหมาย =
  capitals['Thailand'] = "Chiangmai";
  capitals['Vietnam'] = "Hanoi";

  // แก้ไข: การเข้าถึงข้อมูลใน Map ใช้ [] ไม่ใช่ ()
  print(capitals['Thailand']);
  print(capitals['Vietnam']);

  // (ลบ "Bangkok" และ "martDemn682, dars bolin" ที่เป็นข้อความธรรมดาออก)

  // --- ส่วนของ List ---
  // List Variable
  // แก้ไข: การประกาศ List ต้องมีชื่อตัวแปรและเครื่องหมาย =
  // แก้ไข: "Chiangmai" ต้องอยู่ในเครื่องหมายคำพูด
  List<String> province = ["Chiangmai", "Lampang", "Nan"];

  // แก้ไข: เพิ่ม ; หลังคำสั่ง print
  print(province);
  print(province[0]);
  print(province[2]);

  province.add("KamphaengPhet");
  print(province[3]);
  print(province);

  province.removeAt(1); // ลบ "Lampang" (index ที่ 1)
  print(province);

  // แก้ไข: เครื่องหมาย ' ต้องปิดให้ถูกต้อง
  province.remove("KamphaengPhet");
  print(province);

  province.insert(1, 'Tak'); // เพิ่ม 'Tak' ที่ index 1
  print(province);

  // แก้ไข: คำสั่ง "arinti" ที่ไม่ถูกต้อง เป็น print และการเช็คค่า
  print("province list is empty: ${province.isEmpty}");

  int x = 20, y = 7;
  
  // Arithmetic Operations
  print("x+y = ${x+y}");
  print("x*y = ${x*y}");
  print("x%y = ${x%y}");
  print("x~/y = ${x~/y}");
  
  // Relational/Equality Operations
  print("x<y : ${x<y}");
  print("x!=y : ${x!=y}");
  
  // Type Check (Highlighted in image)
  print("x is String : ${x is String}");
  
}
