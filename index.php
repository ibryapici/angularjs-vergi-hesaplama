<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="app">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>AngularJS ile KDV ve Gelir Vergisi Hesaplama</title>
    <!-- CSS Dosyaları -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-responsive1.css"/>
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }

        #sonucGoster, #sonucGosterf {
            height: 250px;
        }

    </style>
    <!-- AngularJS Dosyaları -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-beta.5/angular.min.js"></script>
    <script type="text/javascript" src="angular-locale_tr.js"></script>
    <script type="text/javascript" src="app.js"></script>

</head>
<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="80">
<div class="container">
    <div id="maas" class="span6" ng-controller="kdvliHesaplama">
        <h4>Fatura için KDV ve Gelir Vergisi Hesaplama</h4>

        <form id="kdvliForm" class="form-inline">
            <label class="answers-label" for="kdvli" title="">KDVli Bedel</label>
            <input type="text" id="kdvli" ng-model="kdvliDeger">
            <button type="button" id="widget-btn1" ng-click="kdvliHesapla();" class="btn btn-small btn-primary">Hesapla</button>

        </form>
        <div id="sonucGoster">
            <h4>Hesaplama Sonucu</h4>
            <table class="table span4">
                <tbody>
                <tr>
                    <td>Toplam Tutar</td>
                    <td style="text-align:right;">{{kdvliToplam | currency}}</td>
                </tr>
                <tr>
                    <td>İşlem Bedeli (KDV'siz Tutar)</td>
                    <td style="text-align:right;">{{kdvliKdvsiz | currency}}</td>
                </tr>
                <tr>
                    <td>Hesaplanan KDV %18</td>
                    <td style="text-align:right;">{{kdvliKdv18 | currency}}</td>
                </tr>
                <tr>
                    <td>Gelir Vergisi</td>
                    <td style="text-align:right;">{{kdvliGelirvergisi | currency}}</td>
                </tr>
                <tr>
                    <td>Ödenecek Toplam Vergi</td>
                    <td style="text-align:right;">{{kdvliToplamvergi | currency}}</td>
                </tr>
                <tr>
                    <td>Kalan</td>
                    <td style="text-align:right;">{{kdvliKalan | currency}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="fatura" class="span5" ng-controller="kdvsizHesaplama">
        <h4>Fatura için KDV ve Gelir Vergisi Hesaplama</h4>

        <form id="kdvsizForm" class="form-inline">
            <label class="answers-label" for="kdvsiz" title="">KDV'siz Bedel</label>
            <input type="text" id="kdvsiz" ng-model="kdvsizDeger">
            <button type="button" id="widget-btn1" ng-click="kdvsizHesapla();" class="btn btn-small btn-primary">Hesapla</button>

        </form>
        <div id="sonucGosterf">
            <h4>Hesaplama Sonucu</h4>
            <table class="table span4">
                <tbody>
                <tr>
                    <td>Toplam Tutar</td>
                    <td style="text-align:right;">{{kdvsizToplam | currency}}</td>
                </tr>
                <tr>
                    <td>İşlem Bedeli (KDV'siz Tutar)</td>
                    <td style="text-align:right;">{{kdvsizKdvsiz | currency}}</td>
                </tr>
                <tr>
                    <td>Hesaplanan KDV %18</td>
                    <td style="text-align:right;">{{kdvsizKdv18 | currency}}</td>
                </tr>
                <tr>
                    <td>Gelir Vergisi</td>
                    <td style="text-align:right;">{{kdvsizGelirvergisi | currency}}</td>
                </tr>
                <tr>
                    <td>Ödenecek Toplam Vergi</td>
                    <td style="text-align:right;">{{kdvsizToplamvergi | currency}}</td>
                </tr>
                <tr>
                    <td>Kalan</td>
                    <td style="text-align:right;">{{kdvsizKalan | currency}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>