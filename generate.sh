# Get the latest openapi spec
wget https://raw.githubusercontent.com/frittsnl/metropolis-openapi-spec/master/openapi.yaml

openapi-generator generate -i ./openapi.yaml -g php --additional-properties=invokerPackage=SunDataMetropolisClient --git-user-id frittsnl --git-repo-id sundata-metropolis-client-php

# Remove the api spec
rm  openapi.yaml
