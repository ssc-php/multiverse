<?php
// Copies the `./templates` folder to the given location.
// This allows to bootstrap new Quarry Blocks.
//
// Usage:
// bldr ./install.php <target>
//
// Example:
// bldr ./quarry/0000-new-quarry-block/1.0/install.php ./quarry/0100-add-project-license

// The `bldr` script already includes the autoloader, so no need for `require`.
// Steps used in the script:
use Ssc\Bld\Step;
use Ssc\Bld\Step\Filesystem\Copy;

// Quarry Block Scripts return an array of steps to execute.
// Mustache style placeholders will be replaced:
// * `{{ bldr.target }}`: by the 2nd argument of `bldr` (the target path)
// * by default values found in `./block.json`
// * by values computed dynamically if supported
// * by values provided interractively by the user
/** @return array<Step> */
return [
    new Copy(
        source: __DIR__ . '/templates',
        destination: '{{ bldr.target }}',
    ),
];
