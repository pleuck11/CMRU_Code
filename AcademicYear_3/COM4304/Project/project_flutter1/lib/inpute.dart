import 'package:flutter/material.dart';

class Inpute extends StatefulWidget {
  const Inpute({super.key});

  @override
  State<Inpute> createState() => _InputeState();
}

class _InputeState extends State<Inpute> {
  final TextEditingController _nameInput = TextEditingController();
  int? radioData = 1;

  @override
  void dispose() {
    _nameInput.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text("Inpute Page"),
        backgroundColor: Colors.lightBlueAccent,
        foregroundColor: const Color.fromARGB(255, 0, 0, 0),
        centerTitle: true,
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            const Text(
              "From Inpute Page",
              style: TextStyle(fontSize: 28, fontWeight: FontWeight.bold),
            ),
            const SizedBox(height: 24),
            TextFormField(
              controller: _nameInput,
              decoration: const InputDecoration(
                labelText: 'Enter your name',
                hintText: 'Name',
                prefixIcon: Icon(Icons.person),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.all(Radius.circular(12.0)),
                ),
              ),
            ),
            const SizedBox(height: 20),
            Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                Expanded(
                  child: RadioListTile<int>(
                    title: const Text('Male'),
                    value: 1,
                    groupValue: radioData,
                    onChanged: (value) {
                      setState(() {
                        radioData = value;
                      });
                    },
                  ),
                ),
                Expanded(
                  child: RadioListTile<int>(
                    title: const Text('Female'),
                    value: 2,
                    groupValue: radioData,
                    onChanged: (value) {
                      setState(() {
                        radioData = value;
                      });
                    },
                  ),
                ),
              ],
            ),
            const SizedBox(height: 20),
            SizedBox(
              width: double.infinity,
              child: ElevatedButton(
                style: ElevatedButton.styleFrom(
                  backgroundColor: Colors.lightBlueAccent,
                  foregroundColor: const Color.fromARGB(255, 0, 0, 0),
                  padding: const EdgeInsets.symmetric(vertical: 16),
                  shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.circular(12.0),
                  ),
                ),
                onPressed: () {
                  // แสดง AlertDialog เมื่อกดปุ่ม
                  showDialog(
                    context: context,
                    builder: (BuildContext context) {
                      return AlertDialog(
                        title: const Text("Message"),
                        // นำข้อความจาก _nameInput มาแสดง
                        content: Text(
                          _nameInput.text.isEmpty
                              ? "Please enter your name."
                              : "${_nameInput.text}\nYou are ${radioData == 1 ? "Male" : "Female"}.",
                        ),
                        actions: <Widget>[
                          TextButton(
                            child: const Text("OK"),
                            onPressed: () => Navigator.of(context).pop(),
                          ),
                        ],
                      );
                    },
                  );
                },
                child: const Text("Click Me"),
              ),
            ),
          ],
        ),
      ),
    );
  }
}
