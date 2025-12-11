import 'package:flutter/material.dart';

class ListViewPage extends StatefulWidget {
  const ListViewPage({super.key});

  @override
  State<ListViewPage> createState() => _ListViewPageState();
}

class _ListViewPageState extends State<ListViewPage> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.blue,
        title: const Text('ListView Demo')),
      body: ListView(
        padding: const EdgeInsets.all(8),
        children: const [
          Card(
            child: ListTile(
            leading: Icon(Icons.home),
            title: Text("item 1"),
            subtitle: Text("sub title 1"),
            tileColor: Color.fromARGB(255, 255, 208, 147),
            trailing: Icon(Icons.star),
            ),
          ),

          Card(
            child: ListTile(
            leading: CircleAvatar(child: Text("01"),),
            title: Text("item 2"),
            subtitle: Text("sub title 1"),
            tileColor: Color.fromARGB(255, 255, 169, 147),
            trailing: Wrap(
              children: [
                Icon(Icons.star),
                Icon(Icons.star),
                Icon(Icons.star),
              ],
            ),
            ),
          ),

          Card(
            child: ListTile(
            leading: CircleAvatar(backgroundImage: AssetImage("assets/images/1.jpeg"),),
            title: Text("item 3"),
            subtitle: Text("sub title 1"),
            tileColor: Color.fromARGB(255, 147, 233, 255),
            trailing: Wrap(
              children: [
                Icon(Icons.star),
                Icon(Icons.star),
                Icon(Icons.star),
                Icon(Icons.star),
                Icon(Icons.star),
              ],
            ),
            ),
          )
        ],
      ),
    );
  }
}