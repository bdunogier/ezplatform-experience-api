### Named renderers (UI components)
The `render()` field method could be used as an entry point for UI components.

It could be used to:
- offer more insight on rendering from twig templates
- generate frontend (react) components

`render` could be the default renderer, and other renderer could be configured by defining more `Views`:
- `renderAccordion()`
- `renderCard()`

They would have their own set of `with` methods, based on the field's and on the view's parameters.
