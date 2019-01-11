# SMMP Stack Machine Metaprogramming

Stack Machine Metaprogramming (SMMP)

We have entered into an era where an unknown amount of error prone software serving a significant portion of services of our daily life. The body of error prone software controlling the world is still growing rapidly by the day. Although there is no sign of imminent catastrophe,  there is also no sign of tendency towards stability.

To be more specific:

(1) "Legacy software" is increasing in terms of absolute number of lines as well as proportion of all software, as the total number of lines of code written from scratch do not seem to show apparent signs on Internet -- based on posts on Reddit /r/programming and questions on stackoverflow.com, to name just a few simple metrics.

(2) The objective measurement of (1) is one of the goals of Stack Machine Metaprogramming.

Although the terms "stack machine" and "metaprogramming" have appeared prominently throughout the history of modern computing since 1960s (based on Google and Google Scholars results), curiously "stack machine metaprogramming" (SMMP) is rarely mentioned, given the fundamental relationships between the two.

Our work on stack machine metaprogramming (SMMP) began in 2017 with the implementation of the Inverse Shunting Yard Algorithm (ISYA). Curiously again, given its significance, the term "inverse shunting yard algorithm" did not appear in either Google and Google Scholars results.

Broadly speaking, any implementation of reverse Polish notation (RPN) in any programming language can be classified as an instance of ISYA, as historically, Dijkstra defined the opposite, i.e. transforming infix notation to RPN.

The most elaborate implementations of ISYA would be the Forth programming language implemented in various other high level programming languages.

We have implemented the inverse shunting yard algorithm in PHP and JavaScript in around 50 lines of code -- an important milestone. We believe our implementation of ISYA deserve a new name -- Multitiered Stack Machine (nSM) -- for the follwoing reasons:

1. The "host" programming languages for nSM, PHP and JavaScript, are themselves executed within a stack machine interpreter.

2. nSM comprises all essential Forth features, such as stack, conditional branches and colon definition, all in around 50 lines of code.

3. nSM can be easily ported to other high level programming languages -- be it stack machine based or otherwise.

The next step of SMMP is a Stack Machine Super Macro.

Next SMUML, mathematics etc ...
