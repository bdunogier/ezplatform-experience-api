## Components
- TypeGroup: named group of types. Based on content type groups.
- Type: named entity, the core of the API. Exposes a set of Fields. Based on a content type and its field definitions.
- Field: named data structure. Each field is of a particular type. Based on a field definition.
- Renderer: a component that renders a field to a representation (like HTML). It exposes a set of methods used to
  customize the rendering
  There are two types of renderers: `TypeRenderer`, and `FieldRenderer`.

## Generated elements

The generated eXperience API are in the `eZ\XPI` namespace.

### `Types\{ContentTypeGroup}\{ContentType}`
One interface/class per defined content type, named after the identifier (like in GraphQL).

### `{ContentType}\Fields\{Field}`

## Code stubs

### Generated API tree
```
└── Types
    ├── Content
    │   └── Gallery
    │       ├── Fields
    │       │   ├── Images.php
    │       │   ├── ImagesArguments.php
    │       │   ├── ImagesItems.php
    │       │   ├── ImagesRenderer.php
    │       │   ├── Title.php
    │       │   └── TitleRenderer.php
    │       └── Gallery.php
    └── Media
        └── Image
            ├── Fields
            │   ├── Asset.php
            │   ├── AssetRenderer.php
            │   ├── Name.php
            │   └── NameRenderer.php
            └── Image.php
```
