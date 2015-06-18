<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ngTest</title>
</head>
<body ng-app="scene">
    <div ng-controller="SceneController as scene">
        <div ng-repeat="affiliation in scene.affiliations">
            <p>{{ affiliation.id }} - {{ affiliation.name }}</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.1/angular.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>