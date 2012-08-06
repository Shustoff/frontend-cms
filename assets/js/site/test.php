<!DOCTYPE html>
<html>
<head>
    <title>Testing qunit</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/qunit-1.9.0.css">
    <script data-main="../site/config" src="../libs/require/require.js"></script>
    <script src="../libs/qunit-1.9.0.js"></script>
    <script src="tests.js"></script>
</head>
<body>
    <h1 id="qunit-header">QUnit Test Suite</h1>
    <h2 id="qunit-banner"></h2>
    <div id="qunit-testrunner-toolbar"></div>
    <h2 id="qunit-userAgent"></h2>
    <ol id="qunit-tests">test markup, hidden.</ol>



    <script>
        QUnit.config.autostart = false;
        require(['tests'],function (testModule) {
            QUnit.start();
            testModule.RunTests();
        });
    </script>
</body>
</html>