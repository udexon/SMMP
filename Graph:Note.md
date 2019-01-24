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

With Graph:Note, we can create a local text file in a Unix system and add the following information to GitHub repositories:

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

So what is the missing link or last mile which makes Graph:Note so different from other graph database system? It is because Graph:Note can simply be embedded in any Unix text file, and served via HTTP protocol as JSON.

With Graph:Note, I am typing entries into my graph database as I write this GitHub markdown document. Text can be taken as comments or keys (fields) of Graph:Note records. This is the most intuitive interface to interact with a graph database.

I may evaluate other programmers on GitHub using the PGDB template above. Other programmers may also evaluate me, by keeping Graph:Note files, which they may decide to share or not to share, and to whom they want to share it. The graph database is coming alive as and when someone writes a line of text -- using the quintessential way to terminate a record, with a newline character. (Disclaimer: not sure if DOS CR/LF is still a thing. /s)
