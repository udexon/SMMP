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


### A more ambitious application: CV Database of Programmers

Programmers are perhaps the most active contributors in online forums. Afterall, they are the creators of online forums!!

Besides conventional job directory / CV submission, is there a better way to discover and consolidate expertise and talents?