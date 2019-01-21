## SMJSON: JSON format for SMGDB

1. Default filename is `J_root` or `.J_root` in each directory.

2. `key:` indicates start of key. `::` marks the end of key.

Double colon suffix `key::` can be used for single value or string as termination is newline.

```
c:
p:: /home/hongwu/devel/5gl/coldef/h_5json
l:: 2030
d:: example history file
::
```

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

4. Undefined lines will all be parsed as comments.
