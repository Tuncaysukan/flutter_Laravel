import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class HomePage extends StatelessWidget {
  const HomePage({Key? key}) : super(key: key);
  final String url = 'https://jsonplaceholder.typicode.com/users';
  Future getProducts() async {
    var response = await http.get(Uri.parse(url));

     return json.decode(response.body);
  }

  @override
  Widget build(BuildContext context) {
    getProducts();
    return Scaffold(
      appBar: AppBar(
        centerTitle: true,
        title: const Text('Laravel Flutter'),
      ),
      body: Center(
        child: FutureBuilder(
          future: getProducts(),
          builder: (context, snapshot) {
            if (snapshot.hasData) {
              return ListView.builder(
                itemCount: ((snapshot.data as dynamic).length),
                itemBuilder: (context, index) {
                  return  ListTile(
                      title: Text((snapshot.data as dynamic) [index].name),
                  );
                },
              );
            } else {
              return const Text('Hatalı İşlem');
            }
          },
        ),
      ),
    );
  }
}
