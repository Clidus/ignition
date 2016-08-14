## Database migration between versions

Follow the instructions bellow to migrate your Ignition database between versions. All instructions should be followed if you are upgrading multiple versions.

### Upgrade from v0.4.1 to v0.5.0

Add published and time field to blog table. 

```SQL
ALTER TABLE `blog` ADD `Published` BOOLEAN NOT NULL DEFAULT FALSE AFTER `Image`;
ALTER TABLE `blog` ADD `Time` TIME NOT NULL AFTER `Date`;
```

All your existing posts will be unpublished. Run this to publish them.

```SQL
UPDATE blog SET Published = TRUE
```