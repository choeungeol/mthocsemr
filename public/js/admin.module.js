/**
 * Created by hankwanghoon on 2016. 8. 14..
 */
(function() {

    'use strict';

    angular.module('Mth.Admin',
        [
            'ngResource',
            'ui.router',
            'angular-ladda',
            'Mth.Utils',
            'ngAnimate',
            'toastr'
        ]);
})();


/**
 * Created by hankwanghoon on 2016. 8. 14..
 */
(function () {

    'use strict';

    angular.module('Mth.Admin')
        .config(config);

    function config($stateProvider) {
        $stateProvider
            .state('intro', {
                url: "",
                views: {
                    "adminContent": {
                        templateUrl: "/admin/view/intro",
                        controller: "IntroController",
                        controllerAs: "intro"
                    }
                }
            })
            .state('create_code_group', {
                url: "/create_code_group",
                views: {
                    "adminContent": {
                        templateUrl: "/admin/view/code/createCodeGroup",
                        controller: "CreateCodeGroupController",
                        controllerAs: "newCode"
                    }
                }
            })
            .state('modify_code_group', {
                url: "/modify_code_group",
                views: {
                    "adminContent": {
                        templateUrl: "/admin/view/code/modifyCodeGroup",
                        controller: "ModifyCodeGroupController",
                        controllerAs: "modCode"
                    }
                }
            });
    }

})();


angular
    .module('Mth.Admin')
    .factory('exception', exception);

exception.$inject = ['logger'];

function exception(logger) {
    var service = {
        catcher: catcher
    };
    return service;

    function catcher(message) {
        return function(reason) {
            logger.error(message, reason);
        };
    }
}
(function() {

    'use strict';

    angular.module('Mth.Admin')
        .controller('MainController', MainController);

    MainController.$inject = ['$scope', '$http' , '$state', 'CodeGroupModel', 'toastr'];

    function MainController($scope, $http, $state, $code, toastr) {
        var main = this;

        // 뷰에서 사용하는 변수
        main.clickCodeGroup = clickCodeGroup;
        main.codeGroups;

        // 초기활성로직
        activate();

        // 함수선언부
        function activate () {
            loadCodeGroup();
        }

        function loadCodeGroup () {
            // 프라미스를 이용한 코딩으로 중요
            $code.getCodeGroupLists()
                .then(function(result) {
                    main.codeGroups = result;
                }, function(reason) {
                    toastr.error('코드그룹을 가져오지 못하였습니다', 'Error');
                });
        }

        function clickCodeGroup ($codeGroup) {
            console.log($codeGroup);
            $state.go('modify_code_group')
        }
    }

})();


(function() {

    'use strict';

    angular
        .module('Mth.Admin')
        .controller('CreateCodeGroupController', CreateCodeGroupController);

    CreateCodeGroupController.$inject = ['$scope', '$timeout'];

    function CreateCodeGroupController($scope, $timeout) {
        // 초기변수
        var newCode = this;

        // 뷰에서 사용하는 변수
        newCode.addRow          = addRow;
        newCode.deleteRow       = deleteRow;
        newCode.laddaControl    = false;
        newCode.newCodes        = [];
        newCode.newCodeGroup    = {group_id: '', group_name: ''};
        newCode.saveCodeGroup   = saveCodeGroup;
        newCode.selAllRow       = selAllRow;
        newCode.selNoRow        = selNoRow;

        // 함수선언부
        function saveCodeGroup () {
            newCode.laddaControl = true;
            console.log('save');
            $timeout(function() {
                newCode.laddaControl = false; // stop loading
            }, 2000);
        }

        function addRow () {
            newCode.newCodes.push({chk: '', code_id: '', code_name: '', error: false, error_list: []});
        }

        function selAllRow () {

            var i;

            for ( i  = newCode.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
                newCode.newCodes[i].chk = true;
            }
        }

        function selNoRow () {
            var i;

            for ( i  = newCode.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
                newCode.newCodes[i].chk = false;
            }
        }

        function deleteRow () {

            var i;

            for ( i  = newCode.newCodes.length - 1 ; i>= 0 ; i -= 1 ) {
                if (newCode.newCodes[i].chk === true) {
                    newCode.newCodes.splice(i, 1);
                }
            }
        }

        function clearForm() {
            newCode.form1.$setPristine();
            newCode.form1.$setUntouched();
        }
    }

})();

(function () {

    'use strict';

    angular.module('Mth.Admin')
        .controller('ModifyCodeGroupController', ModifyCodeGroupController);

    ModifyCodeGroupController.$inject = ['$scope', '$timeout'];

    function ModifyCodeGroupController($scope, $timeout) {
        // 초기변수
        var modCode = this;
    }

})();

(function () {

    'use strict';

    angular
        .module('Mth.Admin')
        .controller('IntroController', IntroController);

    IntroController.$inject = ['$scope', '$timeout'];

    function IntroController($scope, $timeout) {
        // 초기변수
        var intro = this;
    }

})();

/**
 * 서비스
 * module.value     : 런타임시에 변경되는 값 저장
 * module.constant  : 절대 변경이 없는 값 저장
 * module.service   : 서비스 객체 인스턴스 반환. 객체지향 스타일 프로그래밍
 * module.factory   : 서비스 객체 인스턴스 반환. 노출식 모듈 패턴
 * module.provider  : 서비스를 보다 세밀하게 정의. 복잡하며 장황. 애플리케이션 설정하는 동안 서비스의 동작 변경에 유용
 */
(function () {

    'use strict';

    angular.module('Mth.Admin')
        .service('CodeGroupModel', CodeGroupModel);

    CodeGroupModel.$inject = ['$http', '$q', '$log'];

    function CodeGroupModel($http, $q, $log) {
        // 가장 먼저 현재 객체에 대한 참조값을 저장 - 권장사항
        var service = this;

        // 외부사용변수
        service.getCodeGroupLists = getCodeGroupLists;

        // 함수선언
        function getCodeGroupLists() {
            return $http.get("/api/mth-code-group1")
                .then(getCodeGroupListsComplete)
                .catch(getCodeGroupListsFailed);

            function getCodeGroupListsComplete(data, status, headers, config) {
                return data.data;
            }

            function getCodeGroupListsFailed(error) {
                $log.error(error);
                return $q.reject(error);
            }
        }
    }

})();

/**
 * Created by hankwanghoon on 2016. 8. 14..
 */
angular.module('Mth.Utils', []);
(function () {

    'use strict';

    angular.module('Mth.Utils')
        .service('UtilsService', UtilsService);

    function UtilsService() {

        var service = this;

        // 바인드변수
        service.objectToArray = objectToArray;

        function objectToArray(content) {

            if (content.data instanceof Object && !Array.isArray(content.data)) {
                var newArray = [];

                for (var key in content.data) {
                    var item = content.data[key];
                    item.id = key;
                    newArray.push(item);
                }
                return newArray;

            } else {
                return content.data;
            }
        };
    }

})();