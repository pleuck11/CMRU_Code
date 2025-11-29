import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';

void main() {
  runApp(const MyCounter());
}

class MyCounter extends StatelessWidget {
  const MyCounter({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "My Counter",
      debugShowCheckedModeBanner: false,
      theme: ThemeData(
        primarySwatch: Colors.blue,
        textTheme: GoogleFonts.latoTextTheme(
          Theme.of(context).textTheme,
        ),
      ),
      home: const CounterApp(),
    );
  }
}

class CounterApp extends StatefulWidget {
  const CounterApp({super.key});

  @override
  State<CounterApp> createState() => _CounterAppState();
}

class _CounterAppState extends State<CounterApp> {
  int number = 0;

  void _increment() {
    setState(() {
      number++;
    });
  }

  void _decrement() {
    setState(() {
      number--;
    });
  }

  void _reset() {
    setState(() {
      number = 0;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        elevation: 0,
        backgroundColor: Colors.transparent,
        title: Text(
          "Counter App",
          style: GoogleFonts.lato(
            fontWeight: FontWeight.bold,
            color: Colors.white,
          ),
        ),
      ),
      extendBodyBehindAppBar: true,
      body: Container(
        decoration: BoxDecoration(
          gradient: LinearGradient(
            begin: Alignment.topCenter,
            end: Alignment.bottomCenter,
            colors: [
              Colors.blue.shade700,
              Colors.teal.shade400,
            ],
          ),
        ),
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Card(
                elevation: 12.0,
                shape: RoundedRectangleBorder(
                  borderRadius: BorderRadius.circular(24.0),
                ),
                color: Colors.white.withOpacity(0.9),
                child: Padding(
                  padding:
                      const EdgeInsets.symmetric(horizontal: 48.0, vertical: 32.0),
                  child: Column(
                    children: [
                      Text(
                        "Number",
                        style: GoogleFonts.lato(
                          color: Colors.blueGrey.shade700,
                          fontSize: 24,
                          fontWeight: FontWeight.w600,
                        ),
                      ),
                      const SizedBox(height: 20),
                      Text(
                        number.toString(),
                        style: GoogleFonts.montserrat(
                          color: Colors.black87,
                          fontWeight: FontWeight.bold,
                          fontSize: 80,
                        ),
                      ),
                    ],
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
      floatingActionButton: PopupMenuButton<String>(
        onSelected: (value) {
          if (value == 'increment') {
            _increment();
          } else if (value == 'decrement') {
            _decrement();
          } else if (value == 'reset') {
            _reset();
          }
        },
        itemBuilder: (BuildContext context) => <PopupMenuEntry<String>>[
          const PopupMenuItem<String>(
            value: 'increment',
            child: ListTile(
              leading: Icon(Icons.add_circle_outline),
              title: Text('Add'),
            ),
          ),
          const PopupMenuItem<String>(
            value: 'decrement',
            child: ListTile(
              leading: Icon(Icons.remove_circle_outline),
              title: Text('Delete'),
            ),
          ),
          const PopupMenuDivider(),
          const PopupMenuItem<String>(
            value: 'reset',
            child: ListTile(
              leading: Icon(Icons.refresh),
              title: Text('Reset'),
            ),
          ),
        ],
        child: Container(
          height: 60,
          width: 60,
          decoration: BoxDecoration(
            shape: BoxShape.circle,
            gradient: LinearGradient(
                colors: [Colors.pinkAccent, Colors.amber.shade600]),
            boxShadow: [
              BoxShadow(
                color: Colors.black.withOpacity(0.4),
                spreadRadius: 2,
                blurRadius: 8,
                offset: const Offset(0, 4),
              ),
            ],
          ),
          child: const Icon(Icons.menu, color: Colors.white, size: 30),
        ),
      ),
    );
  }
}