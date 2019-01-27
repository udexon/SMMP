## Graph Oriented Programming

### From Chomsky to SQL: Graph Oriented Programming

Of all domains of programming, SQL programmers are perhaps the least glamorous and yet most highly paid, for reasons that outsiders seldom take notice. We begin our discussion with this issue, in order to highlight the practical difficulties faced by what we would consider as "graph oriented programming".

GOP has been narrowly defined as "workflow programming". We would like to expand its definition to include problems like human interactions, for we believe sentences in human natural languages can be considered as a type of graph, and human actions upon receiving the input in terms of sentences can be considered as GOP.

MVC frameworks can be considered as a type of GOP, but perhaps not conceived by their inventors with data or graph as the prime motivation. 

Let us illustrate the complexity of GOP with a trivial example -- lodging a complaint.

MVC programmers would set out to design a multi gigabytes MVC system together with state of the art SQL hardware to win the hearts of the customers.

We prefer to break down the porblem to its bare primitives to illustrate the underlying issues.

First, we propose a readable JSON format, similar to YAML, with some slight changes:

```
complaint_X:
id: 00251 ::
content: ::
date: ::
time: ::
by: ::
admin: ::
::
```

In our notation, called Graph:Node, a key is suffixed by a colon ':' and the end of key is marked by a double colon '::'. So the example above illustrates a nested JSON structure, which is more convenient compared to YAML.

As you can see, a trivial example of complaint is actually not trivial when implemented in a format equivalent to JSON, which explains the high pay of SQL programmers. 

However, conventional MVC frameworks that can solve the problem are too cumbersome and complicated, rendering the "data entry" SQL end of the job unglamorous, as the "intelligent" work of coding goes to the calisthenics of the front end and back end (read PHP) programmers.

Unless someone can create a programming language that can express an MVC task in one line!!

Enter Graph:Code. We adopt the convention of naming our work using the same convention as the Graph:Node format, as it is unique and fits nicely in human readable documents and speeches.

Previously known as 5GL (Fifth Generation Graph Language) as a pun for its source of inspiration, the Forth programming language, the alias Graph:Code conveys the GOP aspects of 5GL.

For example,

```
complaint_X display_on_web_page
node_X display_on_web_page
```

In this mock up examples, `complaint_X` and `node_X` are the keys of Graph:Node, `display_on_web_page` would be a Graph:Code function that displays the Graph:Node on a web page. Details have been omitted for illustration purposes.

The overall system that processes Graph:Node and Graph:Code is called Graph:StackMachine (G:SM), based on its stack machine architecture, which provides an important property called homoiconicity, which we shall explain later.


#### Draft


`:homoiconicity`
We wish to highlight the homoiconic properties of Graph:Code which is largely unexplored as previous works focused on the syntactic aspects of such programming languages. 

The keys in Graph:Node can be referred in Graph:Code expression. Graph:Code statements can be included as an object in Graph:Node making it "self evaluating".

The underlying MVC frameworks can still be used. But now we have one unified programming language that can be interfaced to SQL, PHP, JavaScript, HTML etc.

Most importantly Graph:StackMachine changes how we view role specialization in an MVC team -- one programmer can perhaps handle everything from front end to back end using Graph: StackMachine (G:SM).

Human natural language describe the nested JSON record above in sentences!! We process them without realizing their complexity.

Current MVC creates the system to do graph oriented programming, but too complicated, cannot be expressed in one line.
`;;`

Where are these Graph:Code commands saved, sent and executed?

node_X can then be referred to by other nodes or programs.

Graph code i.e. 5GL RPN is homoiconic. Without graph:code gcode and gson, cannot do graph oriented programming.



Each gson is non trivial. Most people don't realize this. 

So SQL programmers end up doing most of the work, yet that is only data entry, not yet processing, delivery etc.

MVC framework creates the system to do graph oriented programming, but too complicated, cannot be expressed in one line.

GCODE GSON capital or lower case?

Because of despise of SQL programmers, few people would attempt to solve this problem from their perspective.

In fact, human daily interactions are data oriented, starting with describing a problem using sentence. Sentence is a generalization of graph node. Then we do it without describing the actions because methods to act are memorized through years of training.

Using G:SM model, we see that conventional MVC has only done a small part equivalent to human interactions, ie. delivering the message. How to process the message is largely not done, as it requires a simplified engine and programming language to develop further, as in G:SM. 

I write one line of text at command line. Saved as a file. File name is one word. It is not a graph. Graph needs at least two keys, vertex name and edge name, no, node and subnode names, edge is unnamed. So filename is incomplete as graph unless marked by graph node json  gnjson gson 

```
node_X:
subnode_Y: filename
```

node_X can then be referred to by other nodes or programs.

Graph code i.e. 5GL RPN is homoiconic. Without graph:code gcode and gson, cannot do graph oriented programming.


 
creates the system to do graph oriented programming, but too complicated, cannot be expressed in one line.


Graph = data and code = homoiconic = unexplored

Graph = data and code = homoiconic = unexplored
