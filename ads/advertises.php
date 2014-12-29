<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";
include "include/css.php";
?>
<div class="container head " ng-controller="advertisesCtrl">

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

                <div class="col-lg-10">
                    <a href="create_advertise.php" class="btn btn-primary">Create</a>
                </div>
                <div class="col-lg-2">

                    <input type="text" ng-model="search" class="search" placeholder="Search"><br/>
                </div>


            <table class="table table-bordered table-responsive table-condensed table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name </th>
                    <th>By User</th>
                    <th>Start Date</th>
                    <th>Action</th>

                </tr>
                </thead>
                        <tbody>
                            <tr ng-repeat="advertise in advertises | filter:search">
                                <td>{{ advertise.id}}</td>

                                <td>{{ advertise.name_en}}</td>
                                <td>{{ advertise.en_name}}</td>
                                <td>{{ advertise.start_date}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown"> Action <span class="caret"></span> </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="edit_category.php?id={{categories.id}}"><span class="glyphicon glyphicon-remove"></span>  Edit</a></li>
                                                <li><a href="delete_categories.php?id={{categories.id}}"><span class="glyphicon glyphicon-remove"></span> Delete</a></li>
                                                <li><a href="categories_list.php?id={{categories.id}}"><span class="glyphicon glyphicon-remove"></span> List of Category</a></li>
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
    function advertisesCtrl($scope,$http) {
        $http.get('data/advertise.php').success(function(data){
            $scope.advertises = data;
        }).error.data="error in fetching data";
    }
</script>
</body>
</html>