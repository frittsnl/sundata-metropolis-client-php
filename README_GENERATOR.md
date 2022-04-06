## Installing openapi-generator

With brew:

`brew install openapi-generator`

Otherwise, check the docs: https://github.com/OpenAPITools/openapi-generator#1---installation

## Generating a new client

This repo contains `generate.sh` which will do the following for you;

1. Get the latest openapi.yaml from our openapi spec repo
2. Generate the client with the right parameters and templates applied
3. Remove the openapi.yaml after it finishes generating

To run, make sure the file is executable (`chmod +x generate.sh`) and run;

```bash
./generate.sh
```

If you're happy with the result, push the new client to GitHub.

## Pushing the client to github

This repo contains `git_push.sh` which will push all your changes to the repo.
Note that this script can also help you with the versioning of your changes. Read more about versioning below.
To apply versioning make sure to add a custom commit message that includes your versioning tag.

The script will prompt you for a commit message. When none is provided, it will issue a minor update.

To run, make sure the file is executable (`chmod +x git_push.sh`) and run;

```bash
./git_push.sh
```

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
