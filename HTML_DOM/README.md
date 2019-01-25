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
              
Line 1: In the diagram above, line 1 `php smgdb.php` starts the php script `smgdb.php`.

`R/programming.html`, a filename, is pushed onto the stack.

`fgh:` maps to `file_get_html()` in `simple_html_dom.php`, loads and parse the HTML file.

This is the saved Reddit web page.
                                                                                          

Line 2: `div[class=scrollerItem] find:` maps to `$A=$html->find("div[class=scrollerItem]")` in `dom_reddit.php`.

`cx:` counts the number of elements in the search results of `find()` above, and this is used as the loop counter.

`ON ECHO bv:` switches `ON` the `ECHO` variable, for debugging purposes.

`stv:` prints the type of elements of the stack. This is used for PHP objects with recursive properties, where `var_export()` breaks down. 


Line 3: `A l:` set label `A` as start of loop.

`1 -` substracts 1 from counter.

`nl:` prints a newline.

`over:` equivalent to Forth `over`: duplicate the element below the top of stack, i.e. the array of search results. This is standard technique to manipulate the stack in a loop.

`IS_array .` is just a remark, which gets "popped" immediately by `.` -- i.e. do not execute it.

`over:` duplicates the counter 

`IS_counter .` is another remark.


Line 4: `49 swap: -` subtract 49 from `counter - 1`, to get the index of the element in array, i.e. 0 to 49.

`i:` extracts the `i`-th element from the array.


Line 5: `dup:` duplicate the top of stack (TOS) so that the original is available for subsequent operations.

`h2[class=imors3-0] find:` finds the subject line of each Reddit post.

`0 i:` extracts the first element from results (array)

`pda:` pushes result to variable `$DA` (data array), so that we can use it at the end of the loop.


Line 6: `dup: div[class=_1rZYMD_4xY3gRcSS3p8ODO] find: 0 i: pda:` extracts vote count.

Line 7: `span[class=FHCV02u6Cp2zYL0fhQPsO]  find: 0 i: pda:` extracts comment count.

Line 8: `xxx esp:` prints `xxx`. 

Line 9: `A bnz:` "branch if not zero" back to lable `A`.

Line 10: `dap:` loads `$DA` on to stack.

`6 i:` extracs element with index 6; `esp:` prints it.



