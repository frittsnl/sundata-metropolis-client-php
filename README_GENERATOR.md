# Generating a new client

## Versioning

Versioning is implemented trough Github actions: https://github.com/anothrNick/github-tag-action
When the commit message does not contain `#major` or `#minor` the patch value will be bumped (0.0.1 => 0.0.2)

So, whenever a major change has taken place, add the `#major` tag to your git comment

## Keeping unnecessary files out of the package

Accomplished by adding `.gitattributes` which results in Github ignore certain files when generating a zip. On Github repo's composer always tries to get this package. So as long as the user is not requesting the 'git' version and uses a Composer default it seems to me that these assets wil be omitted.

## Preventing files to be overwritten by generator

Add these files to `.openapi-generator-ignore`. See that file for further explanation.

## Temporary fix for Guzzle version

Please see discussion below
https://github.com/OpenAPITools/openapi-generator/issues/7869
People seem to be arguing about making the generator client-agnostic.
There's a temporary fix applied by using a custom composer template. (See https://github.com/OpenAPITools/openapi-generator/issues/7869#issuecomment-835443922)

The generator script applies this template ATM.
