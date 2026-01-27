class Fruit {
  final int id;
  final String name;
  final String emoji;
  final List<String> gradientColors;

  const Fruit({
    required this.id,
    required this.name,
    required this.emoji,
    required this.gradientColors,
  });

  @override
  bool operator ==(Object other) =>
      identical(this, other) || other is Fruit && other.id == id;

  @override
  int get hashCode => id.hashCode;
}
