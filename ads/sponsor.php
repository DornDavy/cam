<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";
include "include/css.php";
?>
<div class="container head " ng-controller="sponsorCtrl">

    <div style="margin-top: 50px;">

        <?php
        session('update');
        session('destroy');
        session('create');
        ?>
        <div class="header">
            <?php
            include 'include/menu.php'

            ?>
        </div>
        <div class="row" style="margin-top: 40px">
            <div class="breadcrumb">
                <?php
                include 'include/breadcrume.php'
                ?>

            </div>
                <div class="col-lg-10">
                    <a href="create_sponsor.php" class="btn btn-primary">Create</a>
                </div>
                <div class="col-lg-2">

                    <input type="text" ng-model="search" class="search" placeholder="Search"><br/>
                </div>


            <table class="table table-bordered table-responsive table-condensed table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Admin</th>
                    <th>Company </th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Action</th>

                </tr>
                </thead>
                        <tbody>
                            <tr ng-repeat="sponsor in sponsors | filter:search">
                                <td>{{ sponsor.id}}</td>
                                <td>{{ sponsor.en_name}}</td>
                                <td>{{ sponsor.company_name}}</td>
                                <td>{{ sponsor.name_en}}</td>
                                <td>{{ sponsor.date}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown"> Action <span class="caret"></span> </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="edit_sponsor.php?id={{sponsor.id}}"><span class="glyphicon glyphicon-remove"></span>  Edit</a></li>
                                                <li><a href="delete_categories.php?id={{sponsor.id}}"><span class="glyphicon glyphicon-remove"></span> Delete</a></li>
                                                <li><a href="sponsor_detail.php?id={{sponsor.id}}"><span class="glyphicon glyphicon-remove"></span> Sponsor Detail</a></li>
                                            </ul>
                                    </div>


                                </td>
                            </tr>
                        </tbody>
            </table>
        </div>

    </div>
</div>
</div>
<?php
include('include/js.php')
?>
<script>
    function sponsorCtrl($scope,$http) {
        $http.get('data/sponsor.php').success(function(data){
            $scope.sponsors = data;
        }).error.data="error in fetching data";
    }
</script>
</body>
</html>