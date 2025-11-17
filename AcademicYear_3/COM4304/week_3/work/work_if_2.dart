// 2) จงเขียนโปรแกรมวนรอบแสดงเลขคู่ที่อยู่ระหว่าง 1 - n โดยรับค่า n เข้ามาจากทางแป้นพิมพ์

import 'dart:io';

void main() {
  stdout.write('กรอกค่า n: ');
  String? input = stdin.readLineSync();

  if (input == null) {
    print('ไม่พบข้อมูลที่กรอก');
    return;
  }

  int? n = int.tryParse(input.trim());

  if (n == null || n < 2) {
    print('กรุณากรอกจำนวนเต็มตั้งแต่ 2 ขึ้นไป');
    return;
  }

  for (int i = 2; i <= n; i += 2) {
    print(i);
  }
}
