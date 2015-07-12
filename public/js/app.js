(function() {
    app = angular.module('scene', []);

    app.controller('SceneController', ['$http', function($http) {
        var vm = this;

        vm.affiliations = [];

        $http.get('/affiliations').success(function(data) {
            vm.affiliations = data; 
        });
    }]);

    app.controller('AffiliationController', ['$http', function($http) {
        var vm = this;

        vm.affiliation = {};

        vm.addAffiliation = function(affiliation) {
            
            $http.post('/affiliations', affiliation);
        }
    }]);
})();