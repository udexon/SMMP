# SMMP Stack Machine Metaprogramming

Stack Machine Metaprogramming (SMMP)

Stack Machine Metaprogramming is a programming technique that can be traced back to Dijkstra's legendary shunting yard algorithm published in 1961 and is one of the most promising techniques encompassing a wide spectrum of computing including:

- [Software Engineering and Quality](https://github.com/udexon/SMMP/blob/master/SMSM.md)
- Unified Collaborative Programming Environment
- Mathematics and programming education
- New foundation for artificial intelligence

Although the terms "stack machine" and "metaprogramming" have appeared prominently throughout the history of modern computing since 1960s (based on Google and Google Scholars results), curiously "stack machine metaprogramming" (SMMP) is rarely mentioned, given the fundamental relationships between the two.


Our work on stack machine metaprogramming (SMMP) began in 2017 with the implementation of the Inverse Shunting Yard Algorithm (ISYA). Curiously again, given its significance, the term "inverse shunting yard algorithm" did not appear in either Google and Google Scholars results.

Broadly speaking, any implementation of reverse Polish notation (RPN) in any programming language can be classified as an instance of ISYA, as historically, Dijkstra defined the opposite, i.e. transforming infix notation to RPN.

The most elaborate implementations of ISYA would be the Forth programming language implemented in various other high level programming languages.

We have implemented the inverse shunting yard algorithm in PHP and JavaScript in around 50 lines of code -- an important milestone. We believe our implementation of ISYA deserve a new name -- Multitiered Stack Machine (nSM) -- for the follwoing reasons:

1. The "host" programming languages for nSM, PHP and JavaScript, are themselves executed within a stack machine interpreter.

2. nSM comprises all essential Forth features, such as stack, conditional branches and colon definition, all in around 50 lines of code.

3. nSM can be easily ported to other high level programming languages -- be it stack machine based or otherwise

Multitiered Stack Machine (nSM)

https://www.linkedin.com/pulse/multitiered-stack-machine-nsm-using-5gl-fifth-graph-ng-ph-d-/

http://5gl.epizy.com/nsm/fgl.html

nSM simply means "a stack machine within a stack machine .... (repeat up to N times)" . It is so named because the initial implementations of nSM are coded in PHP and JavaScript, whose interpreters are themselves stack machines.
