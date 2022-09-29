import 'package:flutter/material.dart';

import 'package:flutter/material.dart';

class AppTheme {
  static const Color primary = Color.fromARGB(255, 33, 252, 13);

  static final ThemeData darkTheme = ThemeData.dark().copyWith(
      appBarTheme: const AppBarTheme(
        color: primary,
        elevation: 0,
      ),
      textButtonTheme:
          TextButtonThemeData(style: TextButton.styleFrom(primary: primary)));
}