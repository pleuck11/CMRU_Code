import 'package:flutter/material.dart';
import 'dart:ui';

// คลาสสำหรับเก็บข้อมูลเมนูอาหาร
class MenuItem {
  final String image; // path ของรูปภาพ
  final String thaiName; // ชื่อภาษาไทย
  final String engName; // ชื่อภาษาอังกฤษ
  final String price; // ราคา

  const MenuItem({
    required this.image,
    required this.thaiName,
    required this.engName,
    required this.price,
  });
}

class ListMenuPage extends StatefulWidget {
  const ListMenuPage({super.key});

  @override
  State<ListMenuPage> createState() => _ListMenuPageState();
}

class _ListMenuPageState extends State<ListMenuPage> {
  // รายการเมนูอาหารทั้งหมด
  final List<MenuItem> _items = const [
    MenuItem(
      image: 'assets/images/1.jpg',
      thaiName: 'เฟรนฟราย',
      engName: 'French Fries',
      price: '฿50',
    ),
    MenuItem(
      image: 'assets/images/2.jpg',
      thaiName: 'แฮมเบอร์เกอร์',
      engName: 'Hamurger',
      price: '฿60',
    ),
    MenuItem(
      image: 'assets/images/3.jpg',
      thaiName: 'พิซซ่า',
      engName: 'Pizza',
      price: '฿40',
    ),
    MenuItem(
      image: 'assets/images/4.jpg',
      thaiName: 'ไก่ย่าง',
      engName: 'Grilled Chicken',
      price: '฿80',
    ),
    MenuItem(
      image: 'assets/images/5.jpg',
      thaiName: 'บาร์บีคิว',
      engName: 'Barbecue',
      price: '฿55',
    ),
    MenuItem(
      image: 'assets/images/6.jpg',
      thaiName: 'สเต็ก',
      engName: 'Steak',
      price: '฿30',
    ),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      // ให้เนื้อหา (Body) ขยายไปอยู่หลัง App Bar เพื่อให้เห็นพื้นหลังทะลุผ่าน App Bar ได้
      extendBodyBehindAppBar: true,
      appBar: AppBar(
        // สีพื้นหลังของ App Bar แบบโปร่งใส (Alpha 0.2)
        backgroundColor: Colors.black.withOpacity(0.2),
        elevation: 0, // ลบเงาใต้ App Bar
        // ส่วนที่ทำเอฟเฟกต์เบลอ (Glassmorphism) ให้กับ App Bar
        flexibleSpace: ClipRRect(
          child: BackdropFilter(
            filter: ImageFilter.blur(sigmaX: 10, sigmaY: 10), // ค่าความเบลอ
            child: Container(color: Colors.transparent),
          ),
        ),
        title: const Text(
          'เมนูอาหาร / Menu',
          style: TextStyle(color: Colors.white, fontWeight: FontWeight.bold),
        ),
        centerTitle: true,
      ),
      body: Stack(
        children: [
          // 1. ส่วนพื้นหลัง (Background) แบบไล่เฉดสี (Gradient)
          Container(
            decoration: const BoxDecoration(
              gradient: LinearGradient(
                begin: Alignment.topLeft,
                end: Alignment.bottomRight,
                colors: [
                  Color(0xFF0F2027), // สีดำ
                  Color(0xFF203A43), // สีน้ำเงินเข้มอมเทา
                  Color(0xFF2C5364), // สีเขียวอมเทาเข้ม
                ],
              ),
            ),
          ),
          // 2. ส่วนรายการอาหาร (List Content)
          ListView.builder(
            // กำหนด padding ด้านบนให้พ้น App Bar (110)
            padding: const EdgeInsets.fromLTRB(16, 110, 16, 20),
            itemCount: _items.length,
            itemBuilder: (context, index) {
              final item = _items[index];
              return Padding(
                padding: const EdgeInsets.only(bottom: 16),
                // ClipRRect ใช้สำหรับตัดขอบโค้งให้กับ BackdropFilter
                child: ClipRRect(
                  borderRadius: BorderRadius.circular(25),
                  // BackdropFilter ใช้ทำเอฟเฟกต์เบลอพื้นหลังของการ์ด (Glass Effect)
                  child: BackdropFilter(
                    filter: ImageFilter.blur(sigmaX: 15, sigmaY: 15),
                    child: Container(
                      padding: const EdgeInsets.all(12),
                      decoration: BoxDecoration(
                        // สีพื้นหลังการ์ดแบบขาวจางๆ (0.1)
                        color: Colors.white.withOpacity(0.1),
                        borderRadius: BorderRadius.circular(25),
                        // เส้นขอบสีขาวจางๆ เพื่อเน้นขอบกระจก
                        border: Border.all(
                          color: Colors.white.withOpacity(0.2),
                          width: 1.5,
                        ),
                        boxShadow: [
                          BoxShadow(
                            color: Colors.black.withOpacity(0.05),
                            blurRadius: 10,
                            spreadRadius: 0,
                            offset: const Offset(0, 4),
                          ),
                        ],
                      ),
                      child: Row(
                        children: [
                          // รูปภาพอาหารในวงกลม
                          Container(
                            decoration: BoxDecoration(
                              shape: BoxShape.circle,
                              boxShadow: [
                                BoxShadow(
                                  color: Colors.black.withOpacity(0.1),
                                  blurRadius: 8,
                                  offset: const Offset(0, 4),
                                ),
                              ],
                            ),
                            child: CircleAvatar(
                              backgroundImage: AssetImage(item.image),
                              radius: 32,
                            ),
                          ),
                          const SizedBox(width: 16),
                          // ข้อมูลชื่ออาหาร
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Text(
                                  item.thaiName,
                                  style: const TextStyle(
                                    fontSize: 18,
                                    fontWeight: FontWeight.bold,
                                    color: Colors.white,
                                  ),
                                ),
                                const SizedBox(height: 4),
                                Text(
                                  item.engName,
                                  style: TextStyle(
                                    fontSize: 14,
                                    color: Colors.white70,
                                    fontWeight: FontWeight.w500,
                                  ),
                                ),
                              ],
                            ),
                          ),
                          // ป้ายราคา
                          Container(
                            padding: const EdgeInsets.symmetric(
                              horizontal: 12,
                              vertical: 8,
                            ),
                            decoration: BoxDecoration(
                              color: Colors.white.withOpacity(0.2),
                              borderRadius: BorderRadius.circular(15),
                            ),
                            child: Text(
                              item.price,
                              style: const TextStyle(
                                fontSize: 16,
                                fontWeight: FontWeight.bold,
                                color: Colors.white,
                              ),
                            ),
                          ),
                        ],
                      ),
                    ),
                  ),
                ),
              );
            },
          ),
        ],
      ),
    );
  }
}
