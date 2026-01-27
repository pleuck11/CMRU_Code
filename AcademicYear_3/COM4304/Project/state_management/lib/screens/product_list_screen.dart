import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../data/fruits_data.dart';
import '../providers/favorites_provider.dart';
import '../widgets/fruit_card.dart';
import '../widgets/glass_container.dart';
import 'favorites_screen.dart';

class ProductListScreen extends StatelessWidget {
  const ProductListScreen({super.key});

  @override
  Widget build(BuildContext context) {
    final count = context.watch<FavoritesProvider>().count;

    return Scaffold(
      body: Container(
        decoration: const BoxDecoration(
          gradient: LinearGradient(
            colors: [
              Color(0xFFFCE7F3),
              Color(0xFFF3E8FF),
              Color(0xFFDBEAFE),
            ],
            begin: Alignment.topLeft,
            end: Alignment.bottomRight,
          ),
        ),
        child: SafeArea(
          child: Column(
            children: [
              Padding(
                padding: const EdgeInsets.all(16),
                child: GlassContainer(
                  child: Row(
                    mainAxisAlignment: MainAxisAlignment.spaceBetween,
                    children: [
                      const Text(
                        '🍎 Fruit Shop',
                        style: TextStyle(
                          fontSize: 22,
                          fontWeight: FontWeight.bold,
                          color: Color.fromARGB(255, 0, 0, 0),
                        ),
                      ),
                      Stack(
                        children: [
                          IconButton(
                            icon: const Icon(
                              Icons.favorite,
                              color: Colors.white,
                            ),
                            onPressed: () {
                              Navigator.push(
                                context,
                                MaterialPageRoute(
                                  builder: (_) =>
                                      const FavoritesScreen(),
                                ),
                              );
                            },
                          ),
                          if (count > 0)
                            Positioned(
                              right: 6,
                              top: 6,
                              child: CircleAvatar(
                                radius: 8,
                                backgroundColor: Colors.red,
                                child: Text(
                                  '$count',
                                  style: const TextStyle(
                                    fontSize: 10,
                                    color: Colors.white,
                                  ),
                                ),
                              ),
                            )
                        ],
                      )
                    ],
                  ),
                ),
              ),
              Expanded(
                child: ListView.builder(
                  padding: const EdgeInsets.symmetric(horizontal: 16),
                  itemCount: allFruits.length,
                  itemBuilder: (context, index) {
                    return FruitCard(fruit: allFruits[index]);
                  },
                ),
              )
            ],
          ),
        ),
      ),
    );
  }
}
