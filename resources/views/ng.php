<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ngTest</title>
</head>
<body ng-app="scene">
    <form name="affiliationForm" ng-controller="AffiliationController as affiliationCtrl" ng-submit="affiliationCtrl.addAffiliation(affiliation)">
        <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" ng-model="affiliationCtrl.affiliation._token"> -->
        <input type="text" name="name" placeholder="name" ng-model="affiliationCtrl.affiliation.name">
        <input type="text" name="city" placeholder="city" ng-model="affiliationCtrl.affiliation.city">
        <input type="text" name="website" placeholder="website" ng-model="affiliationCtrl.affiliation.website">
        <input type="submit">
        <p>{{ affiliationCtrl.affiliation.name }}</p>
        <p>{{ affiliationCtrl.affiliation.city }}</p>
        <p>{{ affiliationCtrl.affiliation.website }}</p>
    </form>
    <div ng-controller="SceneController as scene">
        <div ng-repeat="affiliation in scene.affiliations">
            <p>{{ affiliation.id }} - {{ affiliation.name }}</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.1/angular.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>