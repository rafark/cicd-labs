# ion know if is exec so lets ensure it is
chmod u+x ./edp

buildDir=$(./edp build --target $RUNNER_TEMP --silent)
echo "buildDir=$buildDir" >> $GITHUB_OUTPUT
