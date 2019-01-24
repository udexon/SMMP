## #NoBigData #无产阶级大数据 Proletariat Big Data

BIG = Business 大企业 Internet 互联网 Government 大ZF

Big Data is the latest arena of class struggles. Yet there is virtually no meaningful discussion about it.

大数据是阶级斗争的最新战线。 然而， 至今为止， 鲜少有人提及。

The main reasons are the lack of a practical use case and practical solutions.

Our proposed SMGDB / SMJSON is a ....

1. [Stack Machine JSON](https://github.com/udexon/SMMP/blob/master/SMJSON.md)

2. Save Instagram script in J_smjson. Write 5GL script to retrieve Instgram script. Better script management. Include make html. Make SMGDB with more than one nodes.

`keyword.html` in `ig` directory has the keyword and date time of execution.

`dltag` and `dlsc` (sc=shortcode) can be done repeatedly all the time.

Only do `mkightml` when need to refresh html statistics table.

5GL/PHP is the way to make PHP functions available at command line and HHTP/POST/GET!!

```
ig:
p:: /home/hongwu/devel/5gl/igdl_2019/
t:: Title: Instagram Photo Ranking
E:: php smgdb.php <Instagram_hashtag> dltag dlsc
::

ig:
p:: /home/hongwu/devel/5gl/igdl_2019/
t:: Title: Instagram Photo Ranking
E:: php smgdb.php igstats
E_i:: command line
H:: smgdb.php?S=igstats
H_i:: http GET
::
```

Need to explain `$CDW` and colon definition.

```
$ php smgdb.php cdw: :igstats 1 substr: i: im: s:

fgl_s 396 < 3 > array ( 0 => array ( 0 => 'smgdb.php', 1 => 'cdw:', 2 => ':igstats', 3 => '1', 4 => 'substr:', 5 => 'i:', 6 => 'im:', 7 => 's:', ), 1 => 'smgdb.php', 2 => 'array: A shv: array: B shv: array: C shv: ig/B*.html glob: alike_user_shortcode nl: A B C 3sort: A rshv: ON ECHO bv: ncolsb psb: table: body: html: ec: ;', )
```

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
