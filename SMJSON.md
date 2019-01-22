## SMJSON: JSON format for SMGDB

A graph database (GDB) is a graph whose nodes may include any object defined by the properties of the edges and nodes of the graph. 

A graph database can in theory include everything from a text file in a Unix like filesystem to an image in an HTML file.

However, GBD that include Unix files as nodes have not been widely available, representing the "last mile" for an Internet wide graph database.

SMGDB / SMJSON is designed to fill this gap.


1. The primary purpose of SMJSON is to provide a readable, editable and compatible format of JSON to the Reverse Polish Notation used in Stack Machine Graph Database (SMGDB) / 5GL (Fifth Generation Graph Language).

In example (2), bash history is saved to h_* from time to time. 

`J_smjson` SMJSON will be the missing link for bash output text file to be interfaced to SMGDB and the rest of the World Wide Web.

JSON has the fundamental structure for constructing a graph database (GDB). However, it needs a high level interface to high level functions to form a GDB, which is provided by SMJSON.

2. Default filename is `J_smjson` or `.J_smjson` in each directory.

SMGDB uses the filename convention of `T_*` where `T` is a single alphanumeric character representing the category or type of file. A capital letter denotes a system file.

`key:` indicates start of key. `::` marks the end of key.

```
#!smjson
c:
p:: /home/hongwu/devel/5gl/coldef/h_5json
l:: 2030
d:: example history file
::
#end
```

`!#smjson` may appear anywhere in the text file, indicating the beginning of SMJSON parsing. `#end` marks the end. As such, SMJSON can be included in any textfile. These tags maybe excluded from a dedicated SMJOSN file.

Double colon suffix `key::` can be used for single value or string as termination is newline.

A JSON record in `J_smjson` provides additonal descriptions (human readable) and information to aid programs which process the file concerned, and how it can be related to other files or objects within the host machine or remote nodes on the Internet. A Unix file does not include these additional information by default.

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

6. The Reverse Polish Notation statements used in Stack Machine Graph Database (SMGDB) / 5GL (Fifth Generation Graph Language) maybe included in SMJSON as they can be parsed as string.

Here we encounter the interesting propterties of homoiconicity again. 

As RPN itself is homoiconic, SMJSON becomes a data file format that can include executable code (RPN), which can operate on itself.

An RPN statement can consume itself as data input. But SMJSON is a comprehensive data file which can represent a comprehensive range of data structures, including RPN statements which can consume the host SMJSON as input.

This leads to a "self evaluating" file format: Stack Machine Unified Modeling Language (SMUML).
