## Graph:Note -- the Ultimate Format for Code, Documents and Database

The brain processes words before one writes them as sentences. However the brain needs an external aid such as SMJSON to form a graph to relate the sentence to other concepts (objects). Other visual aids or diagrams perform similar relationship functions. 

Graph:Note or SMJSON are extensions of the ubiquitous JSON format designed to make it readable and editable by humans, additional graph database functionalities.

[SMJSON (Stack Machine JSON)](https://github.com/udexon/SMMP/blob/master/SMJSON.md) is the original technical term and Graph:Note is the more user friendly brand name, referring to the same thing.

The [SMJSON (Stack Machine JSON)](https://github.com/udexon/SMMP/blob/master/SMJSON.md) article explains the fundamental mechanisms of SMJSON. In this article, we illustrate how to produce documentation using Graph:Note, with graph database functionalities offered by SMGDB (Stack Machine Graph Database).

### A Trivial Example

For example, as I write this article, I am thinking how relate to relate Graph:Note to Xanadu, TeX and other hypertext processing systems attempted. Where should I place them in the article to make the point more effective?

How can I "think out loud"? i.e. How can I share notes with other collaborators -- while not confusing other readers?

Here is the first example of how Graph:Note can help:

```
Notes::
But only Graph:Note smjson is both readble/editable to human and computer??
```

Simple place a `Notes::` tag before one line or a paragraph.

From [SMJSON (Stack Machine JSON)](https://github.com/udexon/SMMP/blob/master/SMJSON.md), `key::` is an SMJSON feature to specify a key. In JSON, it is not so readable. It is however made more readable in SMJSON.

So I may write:

```
LiteratureReview::
How relate to relate Graph:Note to Xanadu, TeX and other hypertext processing systems attempted. 
Where should I place them in the article to make the point more effective?
```

Together with Markdown, the Graph:Note `LiteratureReview::` tag makes the note readable to collaborators and readers, and it can be extracted using SMGDB code for further processing, e.g. to produce a complete "ToDo" list.

Since Graph:Note text can be processed by SMGDB, it can be shared hundreds (scaleable) collaborators globally, achieving the goals set out by hypertext system designers decades ago.


### A more ambitious application: Graph Database of Programmers (PGDB)

Programmers are perhaps the most active contributors in online forums. Afterall, they are the creators of online forums!!

Besides conventional job directory / CV submission, is there a better way to discover and consolidate expertise and talents?

By applying Graph:Note to GitHub repositories, we can build a graph database of programmers (PGDB).

PGDB can be used to evaluate talents and their availability for short term projects -- the most useful information for free software / open source or commercial project management.

With Graph:Note, we can create a local text file in a Unix system and add the following information concerning GitHub repositories:

```
GitHubURL:: GitHub URL
FieldsOfSpecialization:: Fields of Specialization
ExpertiseLevel:: Expertise Level
Gurus:: Candidates who can be Guru for target programmer
Apprentices:: Candidates who can be apprentice of target programmer
Availability:: Hours per week, start date, end date
```

Of course, we can add more keys (fields) to the Graph:Note record (essentially a JSON object).

At present, the core engine that drives Graph:Note -- Stack Machine Graph Database (SMGDB) -- is a PHP program capable of handling a variant of Reverse Polish Notation called 5GL (Fifth Generation Graph Language). Since the architecture of Graph:Note is open source, it can be extended to other graph database platforms. The main advantage of using 5GL/PHP is its small footprint -- currently only at 10MB of source code (uncompressed), and the homoiconity it offers to Graph:Note, i.e. 5GL commands can be embedded within Graph:Note records, making it "self evaluating" (for testing or other purposes). As such, SMGDB nodes can easily be deployed to any mobile device using Linux virtual machine, such as UserLand and Termux.

- *So what is the missing link or last mile which makes Graph:Note so different from other graph database system? It is because Graph:Note can simply be embedded in any Unix text file, and served via HTTP protocol as JSON.*

With Graph:Note, I am typing entries into my graph database as I write this GitHub markdown document. Text can be taken as comments or keys (fields) of Graph:Note records. This is the most intuitive interface to interact with a graph database.

I may evaluate other programmers on GitHub using the PGDB template above. Other programmers may also evaluate me, by keeping Graph:Note files, which they may decide to share or not to share, and to whom they want to share it. The graph database is coming alive as and when someone writes a line of text -- using the quintessential way to terminate a record, with a newline character. (Disclaimer: not sure if DOS CR/LF is still a thing. /s)


### Code: Sharing and Documentation

Documentation! The nightmare of a programmer -- to document or not to document -- that is the question.

The article ["What is not a stack machie?"](https://github.com/udexon/5CSM/blob/master/SMOCL/README.md) provides some theoretical and technical perspectives for code sharing and documentation based on stack machines.

In recent years, functional programming has gained a larger following, with programming language like Haskell being deployed in financial sectors, including crytocurrency projects such as Cardano by IOHK.

If we were to divide programming languages into the procedural and functional paradigms, stack machine programming, or stack machine metaprogramming (SMMP), stands on its own, in my very humble opinion, as it is the only candidate that can unify both paradigms.

The stack machine programming community is rather unique compared to other programming languages. The most active of stack machine programming languages to date, Forth, was launched in 1968, with roots to LISP while its inventor Charles H. Moore attended McCarthy's class in MIT. The comp.lang.forth newsgroup (!) is perhaps the last still active newsgroups, with contributors who have been around for literally decades. Despite this, the number of academic publications on Forth and related programming languages are curiously few compared to other categories. 

In Forth or similar stack machine programming languages, functions (Forth "words") are "parameter agnostic" -- a function would assume all input data are available on the stack. If the input data are not in the expected order, they can just be rearranged with stack manipulation operations. This behaviour is similar to functional programming, but its implementation is much simpler -- in fact, the simplest way to implement input / output for functions ever conceived, since the invention of mechanical and electronic computers.

Since the advent of the Unix operating systems and related compiler tools, programming languages have flourished, perhaps now reaching a point of negative returns -- a new programming language needs to compete with all the existing programming languages, while the programmer population growth has stagnated as the Internet and mobile computing have perhaps reached all reachable territories.

Against the background of myraid of programming languages, we formalized the Inverse Shunting Yard Algorithm (ISYA) -- the inverse of Dijkstra's now legendary Shunting Yard Algorithm (DSYA): We demonstrated that it is possible create a generalized stack machine in PHP and JavaScript in less than 50 lines of code, and by extension, in any similar host programming language.

This has a far reaching consequence: It implies that any known programming language can execute Reverse Polish Notation, making it THE unique candidate to unify ALL known programming languages.

Further, if all programmming languages can be transformed to RPN, then the code written in any programming language can be shared as RPN scripts, making it possible for the first time in human history, for any programmer to share and reuse ALL code ever published and stored on the Internet.

Let's reiterate the last paragraph to let perhaps the most significant breakthrough in the history of computing sink in the reader's head:

- *If all programmming languages can be transformed to RPN, then the code written in any programming language can be shared as RPN scripts, making it possible for the first time in human history, for any programmer __*to share and reuse ALL code ever published and stored on the Internet*__.*

Graph:Note and SMGDB (Stack Machine Graph Database) will be the mechanism to enable this.


### Example: Instagram Like Ranking

In [Instagram Like Ranking](https://github.com/udexon/SMMP/blob/master/NoBigData.md#instagram-like-ranking), the Colon Definition Words (CDW) are stored as JSON text file and loaded as associative array by 5GL/PHP, so they can be easily shared via HTTP as JSON string.

We believe SMGDB Graph:Note overcomes a major drawback in conventional code sharing system (e.g. GitHub), i.e. code in SMGDB can be executed live, manipulated and tested like a full fledged shell. This property is inherited and derived from Forth conventions.

Secondly, we believe by providing a unified RPN script for all programming languages, the costs for training new programmers as well as working on multiligual (programming) projects will be greatly reduced, or it makes it much easier to find the skilled personnel for a required task.

For example, Forth shells have been implemented in Haskell. Someone who is familiar with Forth would be able to pick up Haskell more easily, perhaps even able to run RPN code written elsewhere in Haskell with minor modifications.


### Pareto Principle: Most Beneficial Applications

1. Graph Database of Programmers

- Better project management for all

- Improve programers' income -- reduce pay gaps between MAGAF and the rest of us

2. Graph Database of Instagram Users

3. Other types of Graph Database, Gurunet for Training, Internet of Peoples (IoP)

