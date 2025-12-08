
import 'dart:ui';

import 'package:flutter/material.dart';

class FoodOrderPage extends StatefulWidget {
  @override
  _FoodOrderPageState createState() => _FoodOrderPageState();
}

class _FoodOrderPageState extends State<FoodOrderPage> {
  Map<String, bool> ingredients = {
    'ข้าวผัด': false,
    'หมูทอด': false,
    'ไก่ย่าง': false,
    'ยำมาม่า': false,
    'ไข่เจียวหมูสับ': false,
    'ก๋วยเตี๋ยว': false,
  };

  List<String> get selectedIngredients {
    return ingredients.entries
        .where((entry) => entry.value)
        .map((entry) => entry.key)
        .toList();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      extendBodyBehindAppBar: true, // Make body extend behind app bar
      appBar: AppBar(
        title: Text('สั่งอาหาร', style: TextStyle(color: const Color.fromARGB(255, 0, 0, 0), fontWeight: FontWeight.bold)),
        backgroundColor: Colors.transparent, // Make app bar transparent
        elevation: 0,
        centerTitle: true,
      ),
      body: Container(
        decoration: BoxDecoration(
          gradient: LinearGradient(
            colors: [Colors.purple.shade200, Colors.blue.shade400],
            begin: Alignment.topLeft,
            end: Alignment.bottomRight,
          ),
        ),
        child: Column(
          children: <Widget>[
            SizedBox(height: kToolbarHeight + MediaQuery.of(context).padding.top), // Space for app bar
            Padding(
              padding: const EdgeInsets.all(20.0),
              child: Text(
                'เลือกเมนูอาหาร',
                style: TextStyle(
                    fontSize: 28,
                    fontWeight: FontWeight.bold,
                    color: const Color.fromARGB(255, 0, 0, 0)),
              ),
            ),
            Expanded(
              child: ClipRRect(
                borderRadius: BorderRadius.circular(20.0),
                child: BackdropFilter(
                  filter: ImageFilter.blur(sigmaX: 10.0, sigmaY: 10.0),
                  child: Container(
                    margin: const EdgeInsets.symmetric(horizontal: 20.0),
                    decoration: BoxDecoration(
                      color: Colors.white.withOpacity(0.2),
                      borderRadius: BorderRadius.circular(20.0),
                      border: Border.all(
                        color: Colors.white.withOpacity(0.3),
                        width: 1.5,
                      ),
                    ),
                    child: ListView(
                      padding: EdgeInsets.all(10.0),
                      children: ingredients.keys.map((String key) {
                        return Theme(
                          data: ThemeData(
                            unselectedWidgetColor: const Color.fromARGB(179, 0, 0, 0),
                          ),
                          child: CheckboxListTile(
                            title: Text(key, style: TextStyle(fontSize: 18, color: const Color.fromARGB(255, 0, 0, 0))),
                            value: ingredients[key],
                            onChanged: (bool? value) {
                              setState(() {
                                ingredients[key] = value!;
                              });
                            },
                            activeColor: Colors.deepPurpleAccent,
                            controlAffinity: ListTileControlAffinity.leading,
                            secondary: Icon(Icons.fastfood, color: Colors.white70),
                          ),
                        );
                      }).toList(),
                    ),
                  ),
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.all(30.0),
              child: ElevatedButton(
                onPressed: () {
                  showDialog(
                    context: context,
                    builder: (context) {
                      return BackdropFilter(
                        filter: ImageFilter.blur(sigmaX: 5.0, sigmaY: 5.0),
                        child: AlertDialog(
                          backgroundColor: Colors.white.withOpacity(0.7),
                          title: Text('วัตถุดิบที่เลือก',
                              style: TextStyle(
                                  color: Colors.black87,
                                  fontWeight: FontWeight.bold)),
                          content: Text(selectedIngredients.isNotEmpty ? selectedIngredients.join(', ') : 'คุณยังไม่ได้เลือกวัตถุดิบ', style: TextStyle(color: Colors.black54)),
                          shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(20.0),
                            side: BorderSide(color: Colors.white.withOpacity(0.5), width: 1.5),
                          ),
                          actions: <Widget>[
                            TextButton(
                              child: Text('ตกลง',
                                  style: TextStyle(color: Colors.deepPurple, fontWeight: FontWeight.bold)),
                              onPressed: () {
                                Navigator.of(context).pop();
                              },
                            ),
                          ],
                        ),
                      );
                    },
                  );
                },
                child: Text('ยืนยัน', style: TextStyle(fontSize: 18, color: Colors.white)),
                style: ElevatedButton.styleFrom(
                  backgroundColor: Colors.deepPurpleAccent.withOpacity(0.7),
                  padding: EdgeInsets.symmetric(horizontal: 50, vertical: 20),
                  shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.circular(30.0),
                  ),
                  elevation: 5,
                  shadowColor: Colors.deepPurple.withOpacity(0.5)
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
