## Markdown Colon Definition (MDCD)

As a coder who rather spend more time coding, one is constantly under pressure to produce academic publications.

While working on stack machine metaprogramming (SMMP), I experimented with using the Forth colon definition for markdown format -- now the preferred format by programmers, for obvious reasons.

Eureka! SMMP can now be applied to markdown, human readable documents!

```
: Example1
Instead of ending a colon definition with a semicolon ; , markdown colon definition (MDCD) includes
one paragraph by default, or end with double semicolon ;; for multiple paragraphs.
```

MDCD therefore provides a handy facility to manipulate text which falls within a section, or subsection, or the smallest unit for markdown or equivalent text processing regimes.

```
: Section1
## A Section
```

MDCD can also be used to label sections or subsections.

Further, text within a paragraph can easily be manipulated using line numbers and character positions.

Personally, I find MDCD tremendously useful for organizing my own thoughts when writing. I am sure many writers know the experience of unpublished drafts or notes scattered everywhere. In my case, I prefer using Gmail as my note pad. 

With MDCD, by adding a label, one forces oneself to think of a label that makes sense. If there has been more than one label of the same, then one is forced to think of additional descriptions to make it unique.




