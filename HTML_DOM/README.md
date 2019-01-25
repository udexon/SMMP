## Parsing Reddit Webpage using `simple_html_dom.php` & 5GL/PHP


1. https://github.com/udexon/SMMP/blob/master/HTML_DOM/dom_reddit.php
```
$ php dom_reddit.php
```


2. 5GL (Fifth Generation Graph Language) is a stack machine programming language similar to Forth. The core stack machine is implemented in less than 50 lines of PHP and JavaScript code, and demonstrates the Inverse Shunting Yard Algorithm (ISYA), the inverse of Dijkstra's legendary Shunting Yard Algorithm (DSYA).

(See [5GL core in JavaScript](http://5gl.epizy.com/nsm/fgl.html) and [Multitiered Stack Machine](https://github.com/udexon/SMMP/blob/master/MultitieredStackMachine.md).) 

We have decided not to open source it pending negotiations with investors, but you are welcome to contact the author for collaboration, which will allow you access to the source code.

5GL/PHP command:
```
$ php smgdb.php R/programming.html fgh: 
div[class=scrollerItem] find: cx: ON ECHO bv: stv: 
A l: 1 - nl: stv:   over: IS_array .   over: IS_counter . 
49 swap: - nl: i: 
dup: h2[class=imors3-0] find:   0 i:   pda: 
dup: div[class=_1rZYMD_4xY3gRcSS3p8ODO] find: 0 i: pda:  
span[class=FHCV02u6Cp2zYL0fhQPsO]  find: 0 i: pda:   
xxx esp: nl:    stv: nl: 
A bnz:  
dap: 6 i: 
stv: esp:
```

The immediate benefit of 5GL/PHP is to turn PHP into a shell programming language.

We will break down the 5GL/PHP code, shown with line numbers in the image below:

<img src="https://github.com/udexon/SMMP/blob/master/HTML_DOM/dom_reddit.png" width="520">
                                                                                          
                                                                                          
