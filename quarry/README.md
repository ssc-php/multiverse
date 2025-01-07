# Quarry of Creation

This **Quarry** is a repository of **Blocks**
  -- reusable templates that help you bootstrap or extend projects.

## Block Structure

Each Quarry Block typically look like this:

```plaintext
./quarry/
└── <block-name>/
    └── <version>/
        ├── install.php
        ├── uninstall.php
        └── templates/
```

With: 

- **`install.php`**: PHP script defining the Block’s installation steps.
- **`uninstall.php`**: PHP script defining the Block's removal steps.
- **`templates/`**: Template files copied or modified during installation.

> _Note_: the Block directory name follows an optional convention.
> They are prefixed with 4 digits, allowing for categories and a soft sequencing:
> - `00**`: these Blocks are for manipulating Blocks
> - `01**`: these Blocks are for manipulating generic projects (eg documentation)
> - `02**`: these Blocks are for manipulating generic PHP projects (libraries, applications)

## Creating a New Block

Use `0000-new-quarry-block` to create new Blocks:

```bash
bldr ./quarry/0000-new-quarry-block/1.0/install.php ./quarry/0100-add-project-license
```
