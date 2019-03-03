# Paragraphs WYSIWYG
Provides a Paragraphs selector that works with Entity Browser.
Provides a better UI to work with paragraphs while keeping the existing underlying
storage.
This module hides all the paragraphs and shows only a WYSIWYG Field.
Paragraphs are handled as if they were WYSIWYG plugins.

## Required modules
- Paragraphs
- Entity Embed
- Entity Browser

## Installation
1) Use composer to require the module and enable it as usual
1) Flush caches
1) Add a paragraph field to the content type 
1) Go to the 'Manage form display' tab and change the Widget of the paragraph 
 field to 'Paragraphs WYSIWYG'
 
 
## Todo
- Support for embedded paragraphs. It doesn't play well with Bootstrap Paragraphs
  module. There is some error to do with language field on the database when we
  try to add a Column paragraph with children.
