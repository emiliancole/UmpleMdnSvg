
This is the full basic class implementation of the MDN Web Docs Svg Elements.

Each svg element is a class with private attributes, a constructor, set and get public functions for each attribute
and three last public methods to render the svg webpage.

These methods are:

draw() : to render a complete closed svg tag (<circle cx="50" cy="50" r="50" style="fill:red;" />)

open() : to render an open svg tag (<circle cx="50" cy="50" r="50" style="fill:red;" >)

close() : to render a closed svg tag (</circle>)

The open() and close() methods are usefull when an svg tag must be included inside another svg tag. 
For example in the <animate> tag.

Many examples of use are included.
  
