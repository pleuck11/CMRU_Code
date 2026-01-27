import 'package:flutter/material.dart';
import '../models/fruit.dart';

class FavoritesProvider extends ChangeNotifier {
  final List<Fruit> _favorites = [];

  List<Fruit> get favorites => List.unmodifiable(_favorites);
  int get count => _favorites.length;
  bool get isEmpty => _favorites.isEmpty;

  bool isFavorite(Fruit fruit) => _favorites.contains(fruit);

  void toggle(Fruit fruit) {
    if (isFavorite(fruit)) {
      _favorites.remove(fruit);
    } else {
      _favorites.add(fruit);
    }
    notifyListeners();
  }

  void remove(Fruit fruit) {
    _favorites.remove(fruit);
    notifyListeners();
  }
}
