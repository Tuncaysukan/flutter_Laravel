import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class HomePage extends StatelessWidget {
  const HomePage({Key? key}) : super(key: key);
  final String url = 'https://jsonplaceholder.typicode.com/posts';

  //final String url = 'http://127.0.0.1:8000/products';


  Future getProducts() async {
    var response = await http.get(Uri.parse(url));

     final data=  jsonDecode(response.body) as List;
     return data;
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
               itemCount: 1,
                itemBuilder: (context, index) {
                  return Center(
                   child:  Text(snapshot.data.toString()),
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
