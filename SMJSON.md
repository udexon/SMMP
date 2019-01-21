## SMJSON: JSON format for SMGDB

1. The primary purpose of SMJSON is to provide a readable, editable and compatible format of JSON to the Reverse Polish Notation used in Stack Machine Graph Database (SMGDB) / 5GL (Fifth Generation Graph Language).

In example (2), bash history is saved to h_* from time to time. 

`J_root` SMJSON will be the missing link for bash output text file to be interfaced to SMGDB and the rest of the World Wide Web.

JSON has the fundamental structure for constructing a graph database (GDB). However, it needs a high level interface to high level functions to form a GDB, which is provided by SMJSON.

2. Default filename is `J_root` or `.J_root` in each directory.

`key:` indicates start of key. `::` marks the end of key.

```
c:
p:: /home/hongwu/devel/5gl/coldef/h_5json
l:: 2030
d:: example history file
::
```

A JSON record in `J_root` provides additonal descriptions (human readable) and information to aid programs which process the file concerned, and how it can be related to other files or objects within the host machine or remote nodes on the Internet. A Unix file does not include these additional information by default.

Double colon suffix `key::` can be used for single value or string as termination is newline.

```
d:: What is this?
l:: history file, path, line number?
a:: double quote for single line string?
k:: value
```

3. Nested json:

Single line (in SMGDB command line):
```
c: b: a b :: d: a c f :: ::
```

Multiline format (in file):
```
c: 
b: a b :: 
d: a c f :: 
::
```

`d: a c f ::` space delimited list represent array of elements. 

4. Single value keys:

`c: b:1 c:3 ::`

5. Undefined lines will all be parsed as comments.

6. A graph database is a graph whose nodes may include any object defined by the properties of the edges and nodes of the graph. 

A graph database can in theory include everything from a text file in a Unix like filesystem to an image in an HTML file.

However, GBD that include Unix files as nodes have not been widely available, representing the "last mile" for an Internet wide graph database.

SMGDB / SMJSON is designed to fill this gap.
