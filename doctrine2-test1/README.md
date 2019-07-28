### Example CLI commands to run:

#### Regarding the database:

`./dockerphp ./vendor/bin/doctrine orm:schema-tool:create`

`./dockerphp ./vendor/bin/doctrine orm:schema-tool:drop --force`

`./dockerphp ./vendor/bin/doctrine orm:schema-tool:update --force`

`./dockerphp ./vendor/bin/doctrine orm:schema-tool:update --force --dump-sql`

#### Regarding the app-commands:

`./dockerphp create_product.php ORM`

`./dockerphp php create_product.php Product4`

`./bin/dockerphp list_products.php` 

`./bin/dockerphp show_product.php 31f82174-3820-427e-a9da-34e021f7d0c3` 

`./bin/dockerphp update_product.php d94f6145-6dad-4220-9745-d4e731cc1d47 ORM-update2124`

`./bin/dockerphp show_product.php d94f6145-6dad-4220-9745-d4e731cc1d47`

`./bin/dockerphp create_user.php john`

`./bin/dockerphp create_user.php karol`

`./bin/dockerphp create_bug.php 1 1 d94f6145-6dad-4220-9745-d4e731cc1d47`

`./bin/dockerphp create_bug.php 1 1 d94f6145-6dad-4220-9745-d4e731cc1d47,cb959701-e126-4207-8dfb-6c48137e6def`

`./bin/dockerphp list_bugs.php` 

`./bin/dockerphp list_bugs_array.php` 

`./bin/dockerphp show_bug.php 1`

`./bin/dockerphp dash_board.php 1`


