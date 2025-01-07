# New Quarry Block

Create new Blocks, by running:

```console
bldr ./quarry/0000-new-quarry-block/1.0/install.php ./quarry/0100-add-project-license
```

This will create the following:

```
./quarry/
└── 0000-new-quarry-block/
└── 0100-add-project-license/
    └── 1.0/
        ├── install.php
        ├── uninstall.php
        └── templates/
```

This is done by copying the `./templates` directory to the target path,
renaming `templates` to the name of the last directory in the target path.

## Uninstall

To remove Blocks, run:

```console
bldr ./quarry/0000-new-quarry-block/1.0/uninstall.php ./quarry/0100-add-project-license
```

> **⚠️  Warning**: This is effectively like running
> `rm -rf ./quarry/0100-add-project-license`, no checks are done to see
> if the target is a Block or not.
