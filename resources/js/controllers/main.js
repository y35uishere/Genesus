chisel.controller("mainController", function($scope, $rootScope, $upload, mainFactory) {
    $scope.now_module = '';
    $scope.template_v = '1.7';
    $scope.__user = {};
    $scope.__s = {};
    $scope.__payment = {};

    $("body").on('click', '.darken', function(event) {
        if (event.target !== this) {
            return;
        }
        $scope.set_module();
        $scope.$apply();
    });

    $scope.set_module = function(name) {
        $scope.now_module = (name) ? name : '';
    }

    $scope.register = function(data) {
        mainFactory.register(data).then(function(r) {
            $scope.__user = r.data.user;
            $scope.set_module();
        }, $scope.handle_error);
    }

    $scope.handle_error = function(response) {
        // console.log(response);
        if (response.status == 422) {
            var data = response.data;
            for (var i in data) {
                alert(data[i]);
            }
        } else if (response.status == 401) {
            alert('must login');
        }
    }

    $scope.is_login = function() {
        mainFactory.is_login().then(function(r) {
            $scope.__user = (r.data.user) ? r.data.user : {};
            $scope.$broadcast('is_login_done');
        });
    }
    $scope.is_login();

    $scope.logout = function() {
        mainFactory.logout().then(function(r) {
            $scope.__user = {};
        }, $scope.handle_error);
    }

    $scope.login = function(data) {
        mainFactory.login(data).then(function(r) {
            $scope.__user = (r.data.user) ? r.data.user : {};
            $scope.set_module();
        }, $scope.handle_error);
    }

    $scope.amazon_connect = function(bucket) {
        mainFactory.aws_key(bucket).success(function(r) {
            $scope.__s.aws = r;
        });
    }

    $scope.amazon_upload = function($files, arg) {
        arg = (arg) ? arg : '';
        var aws = $scope.__s.aws;
        var file = $files[0];
        var url = aws.base_url;
        var new_name = Date.now();
        var rando = Math.floor(Math.random() * 100000);
        new_name = 'lo_' + arg + new_name.toString() + '_' + rando.toString();
        $upload.upload({
            url: url,
            method: 'POST',
            data: {
                key: new_name,
                acl: 'public-read',
                "Content-Type": file.type === null || file.type === '' ?
                    'application/octet-stream' : file.type,
                AWSAccessKeyId: aws.key,
                policy: aws.policy,
                signature: aws.signature
            },
            file: file,
        }).success(function() {
            $scope.__s.aws.file_url = url + new_name;
            $scope.$broadcast('amazon_uploaded');
        });
    }

    $scope.open_payment = function() {
        $scope.set_module('payment');
    }

    $scope.stripe_get_token = function() {
        var $form = $('#payment-form');
        $form.find('.submit').prop('disabled', true);
        Stripe.card.createToken($form, $scope.stripeResponseHandler);
        return false;
    }

    $scope.stripeResponseHandler = function(status, response) {
        var $form = $('#payment-form');
        if (response.error) {
            $form.find('.payment-errors').text(response.error.message);
            $form.find('.submit').prop('disabled', false);
        } else {
            $scope.__payment.token = response.id;
            $scope.submit_payment();
            //$scope.$broadcast('stripe_token_get');
        }
    };

    $scope.submit_payment = function() {
        mainFactory.pay($scope.__payment).then(function(r){
            var $form = $('#payment-form');
            $form.find('.submit').prop('disabled', false);
            $scope.__payment.r = r.data;
            $scope.$broadcast('payment_done');
        },$scope.handle_error);
    }
});
