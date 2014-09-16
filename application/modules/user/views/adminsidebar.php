<!-- Sidebar <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li>
            <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>

        <li  class="active">
            <a href="customer.html"><i class="fa fa-fw fa-table"></i> customer</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-edit"></i>
                Products<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo1" class="collapse side nav">

                <li>
                    <a href="<?php echo base_url(); ?>product/lists">view Product</a>
                    <a href="<?php echo base_url(); ?>product/add">Add Product</a></li>
            </ul>
        </li>

        <li>
            <a href="<?php echo base_url(); ?>slider/addMedia"><i class="fa fa-fw fa-desktop"></i>Media</a>
        </li>

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-edit"></i>
                Slider<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo2" class="collapse side nav">

                <li>
                    <a href="slider.html">view Gallery</a>
                    <a href="slider.html">Add Slider</a>
            </ul>
        </li>

        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>
                Create Group<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo" class="collapse side nav">
                <li>
                    <label class="form"><a href="#">User type </a></label>
                </li>
                <li>
                    <a href="#"><select class="form-control ">
                            <option>Admin</option>
                            <option>vendor</option>
                            <option>user</option>
                        </select></a>
            </ul>
        </li>


    </ul>
</div>
