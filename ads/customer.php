<?php
session_start();
include 'include/config.php';
include 'include/libraries.php';
include "include/restrict.php";
include "include/css.php";
?>
<div class="container head " ng-controller="customerCtrl">

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
                    <a href="create_customer.php" class="btn btn-primary">Create</a>
                </div>
                <div class="col-lg-2">

                    <input type="text" ng-model="search" class="search" placeholder="Search"><br/>
                </div>


            <table class="table table-bordered table-responsive table-condensed table-hover table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Kh Name</th>
                    <th>En Name</th>
                    <th>Sex</th>
                    <th>Date of Birth</th>
                    <th>Place of Birth</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Action</th>
                </tr>
                </thead>
                        <tbody>
                            <tr ng-repeat="customer in customers | filter:search">
                                <td>{{ customer.id}}</td>
                                <td>{{ customer.name_kh}}</td>
                                <td>{{ customer.name_en}}</td>
                                <td>{{ customer.sex}}</td>
                                <td>{{ customer.dob}}</td>
                                <td>{{ customer.pob}}</td>
                                <td>{{ customer.address}}</td>
                                <td>{{ customer.email}}</td>
                                <td>{{ customer.phone}}</td>
                                <td>{{ customer.fax}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-toggle="dropdown"> Action <span class="caret"></span> </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="edit_customer.php?id={{customer.id}}"><span class="glyphicon glyphicon-remove"></span>  Edit</a></li>
                                                <li><a href="delete_customer.php?id={{customer.id}}"><span class="glyphicon glyphicon-remove"></span> Delete</a></li>

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
    function customerCtrl($scope,$http) {
        $http.get('data/customer.php').success(function(data){
            $scope.customers = data;
        }).error.data="error in fetching data";
    }
</script>
</body>
</html>