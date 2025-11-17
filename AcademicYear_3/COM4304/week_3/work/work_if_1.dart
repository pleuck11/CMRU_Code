// 1) จงเขียนโปรแกรมวนรอบตัวเลขที่มีค่าอยู่ระหว่าง 1 - n โดยรับค่า n เข้ามาจากทางแป้นพิมพ์

import 'dart:io';

void main() {
  stdout.write('กรอกค่า n: ');
  String? input = stdin.readLineSync();

  if (input == null) {
    print('ไม่พบข้อมูลที่กรอก');
    return;
  }

  int? n = int.tryParse(input.trim());

  if (n == null || n < 1) {
    print('กรุณากรอกจำนวนเต็มตั้งแต่ 1 ขึ้นไป');
    return;
  }

  for (int i = 1; i <= n; i++) {
    print(i);
  }
}

