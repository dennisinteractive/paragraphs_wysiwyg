# Paragraphs WYSIWYG
Provides a better UI to work with paragraphs while keeping the existing underlying
storage.
This module hides all the paragraphs and shows only a WYSIWYG Field.
Paragraphs are handled as if they were WYSIWYG plugins.

## Required modules
- Paragraphs
- Entity_embed
- Paragraphs_entity_embed

## Installation
1) Use composer to require the module and enable it as usual
1) Flush caches
1) Add a paragraph field to the content type 
1) Go to the 'Manage form display' tab and change the Widget of the paragraph 
 field to 'Paragraphs WYSIWYG'
 
 
