## #NoBigData #无产阶级大数据 Proletariat Big Data

BIG = Business 大企业 Internet 互联网 Government 大ZF

Big Data is the latest arena of class struggles. Yet there is virtually no meaningful discussion about it.

大数据是阶级斗争的最新战线。 然而， 至今为止， 鲜少有人提及。

The main reasons are the lack of a practical use case and practical solutions.

Our proposed SMGDB / SMJSON is a ....

1. [Stack Machine JSON](https://github.com/udexon/SMMP/blob/master/SMJSON.md)


## Instagram Like Ranking

2. Save Instagram script in J_smjson. Write 5GL script to retrieve Instgram script. Better script management. Include make html. Make SMGDB with more than one nodes.

`keyword.html` in `ig` directory has the keyword and date time of execution.

`dltag` and `dlsc` (sc=shortcode) can be done repeatedly all the time.

5GL/PHP is the way to make PHP functions available at command line and HHTP/POST/GET!!

```
ig_1:
p:: /home/hongwu/devel/5gl/igdl_2019/
t:: Title: Instagram download hashtag and download photo by shortcode
Command:: php smgdb.php <Instagram_hashtag> dltag dlsc
Environment:: Linux command line
::

ig_2:
p:: /home/hongwu/devel/5gl/igdl_2019/
t:: Title: Instagram Photo Ranking
Command:: php smgdb.php igstats
E_Environment:: Linux command line
HTTP_String:: smgdb.php?S=igstats
H_Environment:: http GET
::
```

In the Graph:Note / SMJSON example shown above, `ig_1` downloads the page for a given Instagram hashtag and the photos and "edge" (graph) information (e.g. like counts), with 5GL/PHP commands `dltag` and `dlsc`.

`ig_2` sorts the photos by like count and display it in Linux terminal or a web page, as shown in figure below.


![alt text][InstaRank]

[InstaRank]: https://github.com/udexon/SMMP/blob/master/Instagram_Rank_2019.png "Instagram Ranking Example"

The 5GL/PHP commands are defined using Forth style "colon definition", where

```
: func_name t1 f1 f2 t3a t3b f3 ... ;
```

The stack machine engine simply pushes tokens `t1 t3a t3b` onto the stack and executes `f1 f2 f3` in sequence.

The colon definitions are stored in `O_cdw`, a JSON text file, and loaded when `smgdb.php` is initialized.

A part of `O_cdw` is shown below:

```
"ncolsb":["cx:","dup:","A","l:","<tr>","esb:","dup:","2over:","swap:","-","dup:_",".","esb:_",".",
"COUNTER",".",
"dup:","COUNTER_for_Col_B",".","5","ixn:","td:","esb:","ixn_gets_COLUMN_A_from_outside_loop",".",
"dup:","C","B","2","colnsb",".",".",".","<\/tr>",
"esb:","nlsb:","1","-","A","bnz:",";"],

"colnsb":["A","l:","3","pick:","2","pick:","rshv:","swap:","i:","td:","esb:","swap:",".","1","-",
"A","bnz:",";"],

"igstats":["array:","A","shv:","array:","B","shv:","array:","C","shv:","ig\/B*.html","glob:",
"alike_user_shortcode","nl:","A","B","C","3sort:","A","rshv:","ON","ECHO","bv:","ncolsb",
"psb:","table:","body:","html:","ec:",";"]

}
```

To convert the JSON array back to string, we use the following commands, and the final output is shown as the top of the stack (element with index 2):

```
$ php smgdb.php cdw: :igstats 1 substr: i: im: s:

fgl_s 396 < 3 > array ( 0 => array ( 0 => 'smgdb.php', 1 => 'cdw:', 2 => ':igstats', 3 => '1', 
4 => 'substr:', 5 => 'i:', 6 => 'im:', 7 => 's:', ), 1 => 'smgdb.php', 
2 => 'array: A shv: array: B shv: array: C shv: ig/B*.html glob: alike_user_shortcode nl: 
A B C 3sort: A rshv: ON ECHO bv: ncolsb psb: table: body: html: ec: ;', )
```

In a typical 5GL/PHP command list (equivalent to Forth "word list"), a word with a colon suffix `:` denotes a PHP native function. Other words could be a "colon definition word" (CDW) i.e. defined using colon definition, which is composed of native PHP functions or other CDWs. The remain type of tokens would be literal or variables (used by functions as reference to arrays or variables).

As the Colon Definition Words (CDW) is stored as JSON text file and loaded as associative array by 5GL/PHP, they can be easily shared via HTTP as JSON string.
