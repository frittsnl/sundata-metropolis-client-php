# Get the latest openapi spec
curl https://raw.githubusercontent.com/frittsnl/metropolis-openapi-spec/master/openapi.yaml -o openapi.yaml

# Remove currently generated client to avoid multiple clients when names change
rm -rf docs lib test

openapi-generator generate -i ./openapi.yaml -g php --additional-properties=invokerPackage=SunDataMetropolisClient --git-user-id frittsnl --git-repo-id sundata-metropolis-client-php

# Remove the api spec
rm  openapi.yaml
