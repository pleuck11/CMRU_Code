import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import '../models/fruit.dart';
import '../providers/favorites_provider.dart';
import '../utils/color_utils.dart';
import 'glass_container.dart';

class FruitCard extends StatelessWidget {
  final Fruit fruit;
  final bool removeMode;

  const FruitCard({
    super.key,
    required this.fruit,
    this.removeMode = false,
  });

  @override
  Widget build(BuildContext context) {
    final provider = context.watch<FavoritesProvider>();
    final isFav = provider.isFavorite(fruit);

    return Container(
      margin: const EdgeInsets.symmetric(vertical: 12),
      child: Stack(
        children: [
          Container(
            height: 95,
            decoration: BoxDecoration(
              gradient: LinearGradient(
                colors: hexToColors(fruit.gradientColors),
              ),
              borderRadius: BorderRadius.circular(30),
            ),
          ),
          GlassContainer(
            radius: 30,
            child: Row(
              children: [
                Text(
                  fruit.emoji,
                  style: const TextStyle(fontSize: 38),
                ),
                const SizedBox(width: 16),
                Expanded(
                  child: Text(
                    fruit.name,
                    style: const TextStyle(
                      fontSize: 18,
                      fontWeight: FontWeight.bold,
                      color: Colors.white,
                    ),
                  ),
                ),
                IconButton(
                  icon: Icon(
                    removeMode
                        ? Icons.close
                        : isFav
                            ? Icons.favorite
                            : Icons.favorite_border,
                    color: Colors.white,
                  ),
                  onPressed: () {
                    removeMode
                        ? provider.remove(fruit)
                        : provider.toggle(fruit);
                  },
                )
              ],
            ),
          ),
        ],
      ),
    );
  }
}
