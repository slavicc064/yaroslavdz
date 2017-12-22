<header class="index-background">
    <nav class="navbar navbar-default index-navbar">
      <div class="container-fluid">
        <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0"></div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand index-logo" href="#"><img src="images/loco.png" alt="Travel Social Logo"><span>Travel</span> Social</a>
        </div><!--/.navbar-header-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="travel-active"><a href="index.php?page=home">Index</a></li>
            <li class="travel-default"><a href="index.php?page=blog">Blog</a></li>
            <li class="travel-default"><a href="#">Members</a></li>
            <li class="travel-default"><a href="#">Hot tours</a></li>
            <li class="travel-default"><a href="#">Companies</a></li>
          </ul>
          <div class="col-lg-1 col-md-1 col-sm-0 col-xs-0 navbar-right"></div>
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control travel-nav-form" placeholder="Search...">
            </div>
          </form>
          </div>
      </div><!--/.container-fluid-->
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="index-text-head">
          <h1>Buy the best tickets, travel, share your</h1>
          <h1>experiences with friends!</h1>
          <h4>To use all the featuresof the site, simply register</h4>
          <div>
            <button class="btn btn-primary log-in-button" id="login-button" data-toggle="modal" data-target="#travel-modal">Log in</button>
            <button class="btn btn-primary create-acc-button" id="create-account" data-toggle="modal" data-target="#myModal2">Create account</button>
          </div>
          <div class="modal fade" id="travel-modal" tabindex="-1">
            <div class="modal-dialog travel-modal-dialog login-left-m" role="document">
              <div class="modal-content travel-modal-content">
                <div class="modal-body travel-modal-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputModalLogin" class="col-sm-3 control-label login">Log in</label>
                      <div class="col-sm-9">
                        <input type="email" name="travel-email" class="form-control" id="inputModalLogin" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputModalPassword" class="col-sm-3 control-label password">Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="travel-password" class="form-control" id="inputModalPassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group travel-modal-group">
                      <div class="checkbox-container travel-modal-checkbox">
                        <div class="control-group">
                          <label class="control control-checkbox">
                            Remember me
                            <input type="checkbox" name=travel-checkbox>
                            <span class="control_indicator"></span>
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-default enter">Enter</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer travel-modal-footer">
                  <p class="autorization">Autorization from social network</p>
                  <button type="button" class="btn btn-default facebook-modal"><img src="images/facebook.png" alt="Icon"></button>
                  <button type="button" class="btn btn-default google-plus-modal"><img src="images/google-plus.png" alt="Icon"></button>
                  <button type="button" class="btn btn-default tumblr-modal"><img src="images/tumblr.png" alt="Icon"></button>
                </div>
              </div>
            </div>
          </div><!--/.modal fade-->
          <div class="modal fade" id="myModal2" tabindex="-1">
            <div class="modal-dialog travel-modal-dialog create-account-left-m" role="document">
              <div class="modal-content travel-modal-content">
                <div class="modal-body travel-modal-body">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="inputName3" class="col-sm-3 control-label login">Name</label>
                      <div class="col-sm-9">
                        <input type="text" name="travel-name" class="form-control" id="inputName3" placeholder="User Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label login">Email</label>
                      <div class="col-sm-9">
                        <input type="email" name="travel-email-2" class="form-control" id="inputEmail3" placeholder="User Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label password">Password</label>
                      <div class="col-sm-9">
                        <input type="password" name="travel-password-2" class="form-control" id="inputPassword3" placeholder="User Password">
                      </div>
                    </div>
                    <div class="form-group travel-modal-group">
                      <div class="checkbox-container travel-modal-checkbox">
                        <div class="control-group">
                          <label class="control control-checkbox">
                            Remember me
                            <input type="checkbox" name=travel-checkbox-2>
                            <span class="control_indicator"></span>
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-default enter">Enter</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer travel-modal-footer">
                  <p class="autorization">Autorization from social network</p>
                  <button type="button" class="btn btn-default facebook-modal"><img src="images/facebook.png" alt="Icon"></button>
                  <button type="button" class="btn btn-default google-plus-modal"><img src="images/google-plus.png" alt="Icon"></button>
                  <button type="button" class="btn btn-default tumblr-modal"><img src="images/tumblr.png" alt="Icon"></button>
                </div>
              </div>
            </div>
          </div><!--/.modal fade-->
        </div>
        <div>
          <ul class="nav nav-tabs my-tabs" role="tablist">
            <li class="col-lg-1 col-md-1 col-sm-0 col-xs-0 title-menu"></li>
            <li class="title-menu">
              <span>Search</span>
            </li>
            <li role="presentation" class="active">
              <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Flights ticket
                <span class="tabs-right-down"></span>
                <span class="tabs-right-down-2"></span>
                <span class="tabs-right-down-3"></span>
                <span class="tabs-right-down-4"></span>
                <span class="tabs-right-down-5"></span>
                <span class="tabs-right-down-6"></span>
                <span class="tabs-bg-grad-top"></span>
                <span class="tabs-bg-grad-right"></span>
              </a>
            </li>
            <li role="presentation">
              <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Cars
                <span class="tabs-right-down"></span>
                <span class="tabs-right-down-2"></span>
                <span class="tabs-right-down-3"></span>
                <span class="tabs-right-down-4"></span>
                <span class="tabs-right-down-5"></span>
                <span class="tabs-right-down-6"></span>
                <span class="tabs-bg-grad-top"></span>
                <span class="tabs-bg-grad-right"></span>
              </a>
            </li>
            <li role="presentation">
              <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Hotels
                <span class="tabs-right-down"></span>
                <span class="tabs-right-down-2"></span>
                <span class="tabs-right-down-3"></span>
                <span class="tabs-right-down-4"></span>
                <span class="tabs-right-down-5"></span>
                <span class="tabs-right-down-6"></span>
                <span class="tabs-bg-grad-top"></span>
                <span class="tabs-bg-grad-right"></span>
              </a>
            </li>
            <li role="presentation">
              <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Cruises
                <span class="tabs-right-down"></span>
                <span class="tabs-right-down-2"></span>
                <span class="tabs-right-down-3"></span>
                <span class="tabs-right-down-4"></span>
                <span class="tabs-right-down-5"></span>
                <span class="tabs-right-down-6"></span>
                <span class="tabs-bg-grad-top"></span>
                <span class="tabs-bg-grad-right"></span>
              </a>
            </li>
            <li role="presentation" class="tabs-hidden">
              <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Tours
                <span class="tabs-right-down"></span>
                <span class="tabs-right-down-2"></span>
                <span class="tabs-right-down-4"></span>
                <span class="tabs-right-down-5"></span>
                <span class="tabs-right-down-6"></span>
                <span class="tabs-bg-grad-top"></span>
                <span class="tabs-bg-grad-right"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="container-fluid">
    <div class="row">
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active tab-1" id="home">
          <div class="row form-m0">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <form>
                <div class="form-group from-group">
                  <label for="inputFrom" class="control-label from">From</label>
                  <div>
                    <input type="text" class="form-control" id="inputFrom" placeholder="Vladivostok">
                  </div>
                </div>
                <div class="form-group to-group">
                  <label for="inputTo" class=" control-label to">To</label>
                  <div>
                    <input type="text" class="form-control" id="inputTo" placeholder="Moscow">
                  </div>
                </div>
                <div class="form-group depart-group">
                  <label for="inputDatepicker" class=" control-label">Depart</label>
                  <div>
                    <input type="button" class="form-control" id="inputDatepicker" data-datepicker="on" value="01.01.1970">
                    <img src="images/icon-date.png" alt="Date">
                  </div>
                </div>
                <div class="form-group depart-group">
                  <label for="inputDatepicker-2" class=" control-label">Depart</label>
                  <div>
                    <input type="button" class="form-control" id="inputDatepicker-2" data-datepicker="on" value="01.01.1970">
                    <img src="images/icon-date.png" alt="Date">
                  </div>
                </div>
                <div class="form-group adults">
                  <label class="control-label">Adults</label>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">1</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                  </div>
                </div>
                <div class="form-group adults">
                  <label class="control-label">Children</label>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">1</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                  </div>
                </div>
                <div class="form-group adults">
                  <label class="control-label">Infants</label>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">1</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                  </div>
                </div>
                <div class="form-group class">
                  <label class="control-label">Class</label>
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">Premium Economy</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Premium Economy 2</a></li>
                      <li><a href="#">Premium Economy 3</a></li>
                      <li><a href="#">Premium Economy 4</a></li>
                      <li><a href="#">Premium Economy 5</a></li>
                    </ul>
                  </div>
                </div>
                <div class="checkbox-container ">
                  <div class="control-group">
                    <label class="control control-checkbox">
                      Flexible Dates?
                      <input type="checkbox" />
                      <span class="control_indicator"></span>
                    </label>
                  </div>
                </div>
                <div class="checkbox-container ">
                  <div class="control-group">
                    <label class="control control-checkbox">
                      Flexible Dates?
                      <input type="checkbox" />
                      <span class="control_indicator"></span>
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div><!--/.tab-1-->
        <div role="tabpanel" class="tab-pane tab-2" id="profile">
          <div class="row form-m0">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
              <form>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div>
                    <h2>Search for rental cars</h2>
                    <div class="demo cars-form">
                      <fieldset>
                        <div>
                          <label for="country" class="navbar-left">A country</label>
                          <select name="country" id="country" data-id="selectmenu" class="navbar-left">
                            <option disabled selected>Please Select</option>
                            <option>Example</option>
                            <option>Example2</option>
                            <option>Example3</option>
                            <option>Example4</option>
                            <option>Other</option>
                          </select>
                        </div>
                        <div>
                          <label for="city" class="navbar-left">City</label>
                          <select name="city" id="city" data-id="selectmenu" class="navbar-left">
                            <option disabled selected>Please Select</option>
                            <option>Example</option>
                            <option>Example2</option>
                            <option>Example3</option>
                            <option>Example4</option>
                            <option>Other</option>
                          </select>
                        </div>
                        <div>
                          <label for="place" class="navbar-left">A place</label>
                          <select name="place" id="place" data-id="selectmenu" class="navbar-left">
                            <option disabled selected>Please Select</option>
                            <option>Example</option>
                            <option>Example2</option>
                            <option>Example3</option>
                            <option>Example4</option>
                            <option>Other</option>
                          </select>
                        </div>
                        <div class="checkbox-container" id="cars-checkbox">
                          <div class="control-group">
                            <label class="control control-checkbox">
                              Automatically return to another location
                              <input type = 'checkbox' id = 'cars-check' onchange = 'showOrHide("cars-check", "cars-hidden");'/>
                              <span class="control_indicator"></span>
                            </label>
                          </div>
                        </div>
                        <div id="cars-hidden" style = 'display: none;'>
                          <div>
                            <label for="country-return" class="navbar-left">A country</label>
                            <select name="country-return" id="country-return" data-id="selectmenu" class="navbar-left">
                              <option disabled selected>Please Select</option>
                              <option>Example</option>
                              <option>Example2</option>
                              <option>Example3</option>
                              <option>Example4</option>
                              <option>Other</option>
                            </select>
                          </div>
                          <div>
                            <label for="city-return" class="navbar-left">City</label>
                            <select name="city-return" id="city-return" data-id="selectmenu" class="navbar-left">
                              <option disabled selected>Please Select</option>
                              <option>Example</option>
                              <option>Example2</option>
                              <option>Example3</option>
                              <option>Example4</option>
                              <option>Other</option>
                            </select>
                          </div>
                          <div>
                            <label for="place-return" class="navbar-left">A place</label>
                            <select name="place-return" id="place-return" data-id="selectmenu" class="navbar-left">
                              <option disabled selected>Please Select</option>
                              <option>Example</option>
                              <option>Example2</option>
                              <option>Example3</option>
                              <option>Example4</option>
                              <option>Other</option>
                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 cars-pecker">
                  <div class="form-group depart-group">
                    <label for="inputDatepicker" class=" control-label">Date of receiving:</label>
                    <div>
                      <input type="button" class="form-control" id="inputDatepicker-3" data-datepicker="on" value="01.01.1970">
                      <img src="images/icon-date.png" alt="Date">
                    </div>
                  </div>
                  <div class="form-group depart-group">
                    <label for="inputDatepicker-2" class=" control-label">Return date:</label>
                    <div>
                      <input type="button" class="form-control" id="inputDatepicker-4" data-datepicker="on" value="01.01.1970">
                      <img src="images/icon-date.png" alt="Date">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="messages"></div>
        <div role="tabpanel" class="tab-pane" id="settings"></div>
        <div class="tab-gradient">
          <button class="button-search">Search</button>
          <button class="clear-form">
            <img src="images/delete-button.svg" alt="Delete Button">
            <span>Clear Form</span>
          </button>
        </div>
        <div class="tab-gradient-2"></div>
      </div>

    </div>
  </div>
  <div class="container-fluid map">
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40502.78494162678!2d26.230238194151536!3d50.619238709321145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f6caa2d7c89d7%3A0x27481abdbc4e484!2z0KDQvtCy0L3Qviwg0KDQvtCy0LXQvdGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCAzMzAwNA!5e0!3m2!1sru!2sua!4v1510326010144" allowfullscreen></iframe>
    </div>
  </div>