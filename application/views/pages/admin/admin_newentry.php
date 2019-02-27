<?php $admin_header;?>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php $admin_nav;?>
        <!-- Page Content  -->
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <button type="button" id="sidebarCollapse" class="btn btn-info">
                                    <i class="fas fa-align-left"></i>
                                </button>
                                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fas fa-align-justify"></i>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Profile </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> Logout </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb"  style="background-color: transparent;">
                    <li class="breadcrumb-item"><a href="#"> <i class="fas fa-home"></i> </a></li>
                    <li class="breadcrumb-item"><a href="#"> Airdrops </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> New Entry </li>
                  </ol>
                </nav>
                <div class="row" style="border: 1px solid #D6D6D6; ">
                    <div class="col-sm-12" style="padding: 21px;">
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <form>
                            <div class="form-group col-md-6 col-lg-3">
                                <label for=""> Add Logo from url</label>
                                <input class="form-control" type="url" placeholder="">
                              </div>
                               <div class="form-group col-md-6 col-lg-3">
                                <label for=""> Add Logo from url</label>
                                <input class="form-control" type="url" placeholder="Paste url">
                              </div>
                          <div class="form-group col-md-6 col-lg-3">
                            <label for=""> ICO </label>
                            <input class="form-control" type="text" placeholder="">
                          </div>
                          <div class="form-group col-md-6 col-lg-2">
                            <label for=""> Date Start </label>
                            <input class="form-control" type="date" placeholder="Default input">
                          </div>
                          <div class="form-group col-md-6 col-lg-2">
                            <label for=""> Date End </label>
                            <input class="form-control" type="date" placeholder="Default input">
                          </div>
                          <div class="form-group col-md-6 col-lg-3">
                            <label for=""> Link </label>
                            <input class="form-control" type="url" placeholder="Paste url">
                          </div>
                          <div class="form-group col-md-6 col-lg-2">
                            <label for=""> Platform </label>
                              <select id="inputState" class="form-control" required="">
                                <option selected hidden="" disabled="">Choose...</option>
                                <option> BTC </option>
                                <option> ETH </option>
                              </select>
                          </div>
                          <div class="form-group col-md-6 col-lg-3">
                            <label for=""> Website </label>
                            <input class="form-control" type="url" placeholder="Paste url">
                          </div>
                          <div class="form-group col-md-6 col-lg-3">
                            <label for=""> Supply </label>
                            <input class="form-control" type="number" placeholder="">
                          </div>
                          <div class="form-group col-md-6 col-lg-3">
                            <label for=""> Whitepapper </label>
                            <input class="form-control" type="url" placeholder="Paste url">
                          </div>
                          <div class="form-group col-md-6 col-lg-3">
                            <label for=""> Token Name </label>
                            <input class="form-control" type="text" placeholder="">
                          </div>
                          <div class="form-group col-md-6 col-lg-2">
                            <label for=""> Value </label>
                            <input class="form-control" type="number" placeholder="">
                          </div>

                          <div class="form-group col-md-12 col-lg-12">
                            <label for=""> Details </label>
                            <textarea style="min-height: 300px;" id="summernote" class="form-control" name="details"></textarea>
                          </div>
                          <div class="form-group col-md-12 col-lg-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php $admin_jsscript;?>
<?php $this->load->view('_template/admin/admin_summernote');?>