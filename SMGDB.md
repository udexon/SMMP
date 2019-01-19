## Stack Machine Graph Database

A distributed stack machine reverse polish notation syntax for a graph database: Stack Machine Graph Database (SMGDB).

```
c1 c2 ... F1::URI1 F2:: URI2 URI3 ... :: c3 c4 ....
```

c1 c2 c3 c4 would behave like conventional Forth words, invoking local functions.

F1::URI1 would invoke a SMGDB function F1 on a remote node with address URI1

F2:: URI2 URI3 ... :: would invoke SMGDB function F2 on remote nodes URI3 URI4 ....

The word list between F2:: URI2 URI3 ... :: may contain local SMGDB functions (equivalent to Forth words) to be executed before F2 is sent to the remote nodes upon processing the closing ::

Has anyone attempted / come across something similar?

Also, if :: violates any Forth convention, would you suggest an alternative word / token?

Additional information of the Stack Machine Metaprogramming (SMMP) is available here:

https://github.com/udexon/SMMP
