<div class="col-lg-6" style="margin-top: 10px;">
    <div class="row" style="margin-left: 0px;">
        <div class="col-lg-4">


            <form id="e3">
                <label for="search">Search By *:</label>
                <input type="text" class="form-control" id="search" placeholder="Search by" ng-model="search"/>

            </form>

        </div>
        <div class="col-lg-4">
            <label for="Categories">Categories*:</label>
            <select class="form-control select" id="e1" data-placeholder="Select Category" data-rel="chosen">
                <option value=""><?php
                    auto_select('categories', 'name','','name')
                    ?>
            </select>

        </div>
        <div class="col-lg-4">
            <label for="location">Location*:</label>
            <select name="" id="e2" class="form-control select" data-placeholder="Select Location" data-rel="chosen"
                    ng-model="location">
                <option value=""></option>
                <?php
                auto_select('location', 'name','','name')
                ?>
            </select>
        </div>
    </div>

</div>