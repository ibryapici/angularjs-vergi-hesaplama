var app = angular.module('app',[]);

app.controller("kdvliHesaplama", function($scope) {
    $scope.kdvliHesapla = function() {
        $scope.kdvliToplam = $scope.kdvliDeger;
        $scope.kdvliKdvsiz = kdvsiz($scope.kdvliDeger);
        $scope.kdvliKdv18 = kdv18($scope.kdvliDeger,$scope.kdvliKdvsiz);
        $scope.kdvliGelirvergisi = gelirvergisi($scope.kdvliKdvsiz);
        $scope.kdvliToplamvergi = toplamvergi($scope.kdvliGelirvergisi, $scope.kdvliKdv18);
        $scope.kdvliKalan = kalan($scope.kdvliToplam, $scope.kdvliToplamvergi);
    };

    function kdvsiz(a) {
        return (parseFloat(a) / (1.18)).toFixed(2);
    };

    function kdv18(a, b) {
        return (parseFloat(a) - parseFloat(b)).toFixed(2);
    };

    function gelirvergisi(a) {
        return (parseFloat(a) * 0.2).toFixed(2);
    };

    function toplamvergi(a, b) {
        return (parseFloat(a) + parseFloat(b)).toFixed(2);
    };
    
    function kalan(a, b) {
        return (parseFloat(a) - parseFloat(b)).toFixed(2);
    };
    

});

app.controller("kdvsizHesaplama", function($scope) {
    $scope.kdvsizHesapla = function() {
        $scope.kdvsizKdv18 = kdv18($scope.kdvsizDeger);
        $scope.kdvsizToplam = toplam($scope.kdvsizDeger,$scope.kdvsizKdv18);
        $scope.kdvsizKdvsiz = $scope.kdvsizDeger;
        $scope.kdvsizGelirvergisi = gelirvergisi($scope.kdvsizDeger);
        $scope.kdvsizToplamvergi = toplamvergi($scope.kdvsizGelirvergisi, $scope.kdvsizKdv18);
        $scope.kdvsizKalan = kalan($scope.kdvsizToplam, $scope.kdvsizToplamvergi);
    };

    function kdv18(a) {
        return (parseFloat(a) * (0.18)).toFixed(2);
    };

    function toplam(a, b) {
        return (parseFloat(a) + parseFloat(b)).toFixed(2);
    };

    function gelirvergisi(a) {
        return (parseFloat(a) * 0.2).toFixed(2);
    };

    function toplamvergi(a, b) {
        return (parseFloat(a) + parseFloat(b)).toFixed(2);
    };

    function kalan(a, b) {
        return (parseFloat(a) - parseFloat(b)).toFixed(2);
    };

});


