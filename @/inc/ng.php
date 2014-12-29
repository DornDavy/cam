<script>
    function data($scope,$http) {
        $http.get("inc/location.php")
            .success(function (data) {
                $scope.locations = data;
            }).error('Error');
    }
</script