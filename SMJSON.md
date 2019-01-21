## SMJSON: JSON format for SMGDB

1. The primary purpose of SMJSON is to provide a readable, editable and compatible format to the Reverse Polish Notation used in Stack Machine Graph Database (SMGDB) / 5GL (Fifth Generation Graph Language).

Default filename is `J_root` or `.J_root` in each directory.

2. `key:` indicates start of key. `::` marks the end of key.

```
c:
p:: /home/hongwu/devel/5gl/coldef/h_5json
l:: 2030
d:: example history file
::
```

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

6. In example (2) above, bash history is saved to h_* from time to time. `J_root` SMJSON will be the missing link for bash output text file to be interfaced to SMGDB.

JSON has the fundamental structure for constructing a graph database (GDB). However, it needs a high level interface to high level functions to form a GDB, which is provided by SMJSON.
