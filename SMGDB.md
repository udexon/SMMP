## Stack Machine Graph Database (SMGDB)

### A distributed stack machine reverse polish notation syntax for a graph database

1.
```
c1 c2 ... F1::URI1 F2:: URI2 URI3 ... :: c3 c4 ....
```

`c1 c2 c3 c4` would behave like conventional Forth words, invoking local functions.

`F1::URI1` would invoke a SMGDB function F1 on a remote node with address URI1

`F2:: URI2 URI3 ... ::` would invoke SMGDB function F2 on remote nodes URI2 URI3 ....

The word list between `F2:: URI2 URI3 ... ::` may contain local SMGDB functions (equivalent to Forth words) to be executed before F2 is sent to the remote nodes upon processing the closing ::

(If :: violates any Forth convention, would you suggest an alternative word / token?)

2. `syncd:` synchronizes colon definition of local and remote SMGDB node.

Additional information of the Stack Machine Metaprogramming (SMMP) is available here:

https://github.com/udexon/SMMP
