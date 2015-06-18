(function() {
    app = angular.module('scene', []);

    app.controller('SceneController', ['$http', function($http) {
        var scene = this;

        scene.affiliations = [];

        $http.get('/affiliations').success(function(data) {
            scene.affiliations = data; 
        });
    }]);
})();