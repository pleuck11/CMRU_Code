import 'package:flutter/material.dart';

class AnimatedBackground extends StatelessWidget {
  final Widget child;
  const AnimatedBackground({super.key, required this.child});

  @override
  Widget build(BuildContext context) {
    return Container(
      color: const Color(0xFF2C2C2C), 
      width: double.infinity,
      height: double.infinity,
      child: SafeArea(
        child: child,
      ),
    );
  }
}