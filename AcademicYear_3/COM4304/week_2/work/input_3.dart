// 3) จงเขียนโปรแกรมเพื่อคำนวณหา ค่าเฉลี่ย ของตัวเลข 3 จำนวน โดยรับตัวเลขทั้งสามจำนวน (A, B, และ C) เข้ามาจากทางแป้นพิมพ์

import 'dart:io';

void main() {
  print('คำนวณค่าเฉลี่ยของตัวเลข 3 จำนวน');

  double? a;
  double? b;
  double? c;

  //รับค่า A
  while (true) {
    stdout.write('ตัวเลข A: ');
    final line = stdin.readLineSync();
    if (line == null) {
      print('ไม่มีข้อมูลจากแป้นพิมพ์');
      return;
    }
    final val = double.tryParse(line.trim().replaceAll(',', '.'));
    if (val != null && val > 0) {
      a = val;
      break;
    }
    print('กรุณากรอกตัวเลขมากกว่า 0');
  }

  //รับค่า B
  while (true) {
    stdout.write('ตัวเลข B: ');
    final line = stdin.readLineSync();
    if (line == null) {
      print('ไม่มีข้อมูลจากแป้นพิมพ์');
      return;
    }
    final val = double.tryParse(line.trim().replaceAll(',', '.'));
    if (val != null && val > 0) {
      b = val;
      break;
    }
    print('กรุณากรอกตัวเลขมากกว่า 0');
  }

  //รับค่า C
  while (true) {
    stdout.write('ตัวเลข C: ');
    final line = stdin.readLineSync();
    if (line == null) {
      print('ไม่มีข้อมูลจากแป้นพิมพ์');
      return;
    }
    final val = double.tryParse(line.trim().replaceAll(',', '.'));
    if (val != null && val > 0) {
      c = val;
      break;
    }
    print('กรุณากรอกตัวเลขมากกว่า 0');
  }

  //คำนวณค่าเฉลี่ย
  final average = (a + b + c) / 3;

  // แสดงผล
  print('สูตร: Average = (A + B + C) / 3');
  print('A = ${a.toStringAsFixed(2)}');
  print('B = ${b.toStringAsFixed(2)}');
  print('C = ${c.toStringAsFixed(2)}');
  print('ค่าเฉลี่ย = ${average.toStringAsFixed(3)}');
}
