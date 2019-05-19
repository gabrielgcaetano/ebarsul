<!DOCTYPE html>
<html>
<head></head>
<body>
<script>
    function makeApiCall(action="read") {

        var ssID = '';
        var rng = '';

        if (action == "write"){
            var vals = new Array(6);
            for (var row = 0; row < 6; row++){
                vals[row] = new Array(3);
                for (var col = 0; col < 3; col++){
                    vals[row][col] = document.getElementById(row+":"+col).value;
                }
            }
            var params = {
                spreadsheetId : ssID,
                range : rng,
                valueInputOption:'RAW',
            };
            var valueRangeBody = {"values":vals};
            var request = gapi.client.sheets.spreadsheets.values.update(params, valueRangeBody);
            request.then(function(response){
                console.log(response.result);
            }, function(reason) {
                console.error('error: '+reason.result.error.message);
            });
        } else {
            var params = {
                spreadsheetId: ssID,
                range: rng,
            };
            var request = gapi.client.sheets.spreadsheets.values.get(params);
            request.then(function(response){
                console.log(response.result);
            }, function(reason) {
                console.error('error: '+reason.result.error.message);
            });
        }
    }
    function initClient() {
        var API_KEY = '';  // TODO: Update placeholder with desired API key.

        var CLIENT_ID = '';  // TODO: Update placeholder with desired client ID.

        // TODO: Authorize using one of the following scopes:
        //   'https://www.googleapis.com/auth/drive'
        //   'https://www.googleapis.com/auth/drive.file'
        //   'https://www.googleapis.com/auth/spreadsheets'
        var SCOPE = '';

        gapi.client.init({
            'apiKey': API_KEY,
            'clientId': CLIENT_ID,
            'scope': SCOPE,
            'discoveryDocs': ['https://sheets.googleapis.com/$discovery/rest?version=v4'],
        }).then(function() {
            gapi.auth2.getAuthInstance().isSignedIn.listen(updateSignInStatus);
            updateSignInStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
        });
    }
    function handleClientLoad() {
        gapi.load('client:auth2', initClient);
    }

    function updateSignInStatus(isSignedIn) {
        if (isSignedIn) {
            makeApiCall();
        }
    }

</script>
</body>
</html>