
<div id="sidebarMenu" class="col-md-6 col-lg-6 d-md-block bg-light sidebar collapse">
  <div class="vertical-line"></div>

<div class="display-end">
<div>


<div class="page-wrapper toggled">
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu display-flex-center">
              <div class="sider-bar-profile-block-img">
                <img src="{{ asset('images/nav-icons/ICON2-ADD MEMBERS.png')}}" class="sider-bar-profile-img">
              </div>
              <div class="sider-bar-profile-block-words">
                <div class="profile-div-words">
                   Logged In as <span class="profile-span-text"> Name Surname </span>
                </div>
                <div class="profile-links-block">
                  <div class="profile-links">
                    <a href="#">
                      Sign Out
                    </a>
                  </div>
                  <div class="profile-links">
                      |
                  </div>
                  <div class="profile-links">
                    <a href="#">
                      Edit Profile
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          </div>
        </div>
      </nav>
  </div>

  <div class="page-wrapper toggled">
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">

          <div class="sidebar-menu">
            <ul>
              <li class="sidebar-dropdown padding-list">
                
                <a href="home">
                  <img src="{{ asset('images/nav-icons/ICON1-HOME.png')}}" class="dropdown-heading-icon">
                  <div class="menu-heading">
                    <div class="display-flex">
                      <div>Home</div>
                      <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-HOME.png')}}"></div>
                    </div>
                    <div class="menu-sub-heading-gold">
                      Safari Travel
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    
<!-- sidebar-menu  -->

  <div class="page-wrapper toggled">
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">

        <div class="sidebar-menu">
          <ul>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
              <img src="{{ asset('images/nav-icons/ICON1-ABOUT.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>About</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-ABOUT.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    About The User
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{route('user.about') }}">
                    <img src="{{ asset('images/nav-icons/ICON1-CATERING.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>About</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-CATERING.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user.catering') }}">
                    <img src="{{ asset('images/nav-icons/ICON1-CATERING.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Catering Preference</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-CATERING.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user.health') }}">
                      <img src="{{ asset('images/nav-icons/ICON1-HEALTH.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Health</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-HEALTH.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user.next-of-kin') }}">
                      <img src="{{ asset('images/nav-icons/ICON1-NEXT OF KIN.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Next Of Kin</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-NEXT OF KIN.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

    </nav>
  </div>

  <div class="page-wrapper toggled">
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">

        <div class="sidebar-menu">
          <ul>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
              <img src="{{ asset('images/nav-icons/ICON1-CURRENT SAFARIS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Current Safaris</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-CURRENT SAFARIS.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    User Safari
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{route('overview.current-safaris')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-OVERVIEW.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Overview</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-OVERVIEW.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Current Safaris
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('overview.itinerary')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-ITINERARY.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Itinerary</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-ITINERARY.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Travel
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user.travel-documents')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Travel Documents</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Upload Documents
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user.additional-documents')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCUMENTS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Additional Information</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCUMENTS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          User Information
                        </div>
                      </div>  
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    <img src="{{ asset('images/nav-icons/ICON1-MEMBERS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Contact Information</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-MEMBERS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Provided
                        </div>
                      </div>   
                    </a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

    </nav>
  </div>

  <div class="page-wrapper toggled">
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">

        <div class="sidebar-menu">
          <ul>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
              <img src="{{ asset('images/nav-icons/ICON1-PREVIOUS SAFARIS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Previus Safaris</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-PREVIOUS SAFARIS.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    Listed Safaris
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{route('overview.previous-safaris')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-OVERVIEW.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Overview</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-OVERVIEW.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Previus Safaris
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li>
                    <a href="{{route('overview.previous-itinerary')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-ITINERARY.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Itinerary</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-ITINERARY.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Travel
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user.travel-documents')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Travel Documents</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Upload Documents
                        </div>
                      </div> 
                    </a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

    </nav>
  </div>

  <div class="page-wrapper toggled">
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">

        <div class="sidebar-menu">
          <ul>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
              <img src="{{ asset('images/nav-icons/ICON1-ACCOUNT HISTORY.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Account History</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-ACCOUNT HISTORY.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    User Account
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{route('user.travel-documents')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                        <div class="menu-heading menu-padding">
                          <div class="display-flex">
                            <div>Travel Documents</div>
                            <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCS.png')}}"></div>
                          </div>
                          <div class="menu-sub-heading-gold">
                            Upload Documents
                          </div>
                        </div> 
                    </a>
                  </li>
                  <li>
                    <a href="{{route('user.invoices')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-INVOICES.png')}}" class="dropdown-heading-icon">
                        <div class="menu-heading menu-padding">
                          <div class="display-flex">
                            <div>Invoices</div>
                            <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-INVOICES.png')}}"></div>
                          </div>
                          <div class="menu-sub-heading-gold">
                            Lists of invoices
                          </div>
                        </div> 
                    </a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

    </nav>
  </div>

  <div class="page-wrapper toggled">
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">

        <div class="sidebar-menu">
          <ul>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
              <img src="{{ asset('images/nav-icons/ICON1-SETTINGS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Settings</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-SETTINGS.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                     Custom Settings
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{route('settings.password')}}">
                    <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                          <div class="menu-heading menu-padding">
                            <div class="display-flex">
                              <div>Password</div>
                              <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-PASSWORD.png')}}"></div>
                            </div>
                            <div class="menu-sub-heading-gold">
                              Custom Settings
                            </div>
                          </div> 
                    </a>
                  </li>
                  <li>
                    <a href="{{route('settings.members')}}">
                      <img src="{{ asset('images/nav-icons/ICON1-INVOICES.png')}}" class="dropdown-heading-icon">
                          <div class="menu-heading menu-padding">
                            <div class="display-flex">
                              <div>Members</div>
                              <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-MEMBERS.png')}}"></div>
                          </div>
                            <div class="menu-sub-heading-gold">
                              Lists of Members
                            </div>
                          </div>  
                    </a>
                  </li>
                </ul>
              </div>
            </li>

          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>

    </nav>
  </div>

  <div class="page-wrapper toggled">
      <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">

          <div class="sidebar-menu">
            <ul>
              <li class="sidebar-dropdown padding-list">
                
                <a href="{{route('contact-information')}}">
                <img src="{{ asset('images/nav-icons/ICON1-CONTACTUS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Contact Us</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-CONTACT.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    Safari Fly
                  </div>
                </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>

</div>

</div>

<!--
<div class="vertical-line"></div>
  <div class="page-wrapper toggled">
    <div id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu display-flex-center">
              <div class="sider-bar-profile-block-img">
                <img src="{{ asset('images/nav-icons/ICON2-ADD MEMBERS.png')}}" class="sider-bar-profile-img">
              </div>
              <div class="sider-bar-profile-block-words">
                <div class="profile-div-words">
                   Logged In as <span class="profile-span-text"> Name Surname </span>
                </div>
                <div class="profile-links-block">
                  <div class="profile-links">
                    <a href="#">
                      Sign Out
                    </a>
                  </div>
                  <div class="profile-links">
                      |
                  </div>
                  <div class="profile-links">
                    <a href="#">
                      Edit Profile
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="sidebar-dropdown padding-list">
            
              <a href="#">
                <img src="{{ asset('images/nav-icons/ICON1-HOME.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Home</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-HOME.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    Safari Travel
                  </div>
                </div>
              </a>
            </li>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
                <img src="{{ asset('images/nav-icons/ICON1-ABOUT.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>About</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-ABOUT.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    About The User
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-CATERING.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Catering Preference</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-CATERING.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-HEALTH.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Health</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-HEALTH.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-NEXT OF KIN.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Next Of Kin</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-NEXT OF KIN.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-MEMBERS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Add Members</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-ADD MEMBERS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          About The User
                        </div>
                      </div> 
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
                <img src="{{ asset('images/nav-icons/ICON1-CURRENT SAFARIS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Current Safaris</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-CURRENT SAFARIS.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    User Safari
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
              <ul>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-OVERVIEW.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Overview</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-OVERVIEW.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Current Safaris
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-ITINERARY.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Itinerary</div>
                          <div class="img-abs-icon  sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-ITINERARY.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Travel
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Travel Documents</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Upload Documents
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCUMENTS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Additional Information</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCUMENTS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          User Information
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-MEMBERS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Contact Information</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-MEMBERS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Provided
                        </div>
                      </div> 
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
                <img src="{{ asset('images/nav-icons/ICON1-PREVIOUS SAFARIS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Previus Safaris</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-PREVIOUS SAFARIS.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    Listed Safaris
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
              <ul>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-OVERVIEW.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Overview</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-OVERVIEW.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Previus Safaris
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-ITINERARY.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Itinerary</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-ITINERARY.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Travel
                        </div>
                      </div> 
                    </a>
                  </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                    <a href="#">
                      <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                      <div class="menu-heading menu-padding">
                        <div class="display-flex">
                          <div>Travel Documents</div>
                          <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCS.png')}}"></div>
                        </div>
                        <div class="menu-sub-heading-gold">
                          Upload Documents
                        </div>
                      </div> 
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
                <img src="{{ asset('images/nav-icons/ICON1-ACCOUNT HISTORY.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Account History</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-ACCOUNT HISTORY.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    User Account
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li class="sidebar-dropdown sub-menu-padding">
                      <a href="#">
                        <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                        <div class="menu-heading menu-padding">
                          <div class="display-flex">
                            <div>Travel Documents</div>
                            <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-TRAVEL DOCS.png')}}"></div>
                          </div>
                          <div class="menu-sub-heading-gold">
                            Upload Documents
                          </div>
                        </div> 
                      </a>
                    </li>
                  <li class="sidebar-dropdown sub-menu-padding">
                      <a href="#">
                        <img src="{{ asset('images/nav-icons/ICON1-INVOICES.png')}}" class="dropdown-heading-icon">
                        <div class="menu-heading menu-padding">
                          <div class="display-flex">
                            <div>Invoices</div>
                            <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-INVOICES.png')}}"></div>
                          </div>
                          <div class="menu-sub-heading-gold">
                            Lists of invoices
                          </div>
                        </div> 
                      </a>
                    </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
                <img src="{{ asset('images/nav-icons/ICON1-SETTINGS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Current Safaris</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-SETTINGS.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                     Custom Safaris
                  </div>
                </div>
              </a>
              <div class="sidebar-submenu">
                <ul>
                    <li class="sidebar-dropdown sub-menu-padding">
                        <a href="#">
                          <img src="{{ asset('images/nav-icons/ICON1-TRAVEL DOCS.png')}}" class="dropdown-heading-icon">
                          <div class="menu-heading menu-padding">
                            <div class="display-flex">
                              <div>Password</div>
                              <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-PASSWORD.png')}}"></div>
                            </div>
                            <div class="menu-sub-heading-gold">
                              Custom Settings
                            </div>
                          </div> 
                        </a>
                      </li>
                    <li class="sidebar-dropdown sub-menu-padding">
                        <a href="#">
                          <img src="{{ asset('images/nav-icons/ICON1-INVOICES.png')}}" class="dropdown-heading-icon">
                          <div class="menu-heading menu-padding">
                            <div class="display-flex">
                              <div>Members</div>
                              <div class="img-abs-icon sub-icon-pad"><img src="{{ asset('images/nav-icons/ICON2-MEMBERS.png')}}"></div>
                          </div>
                            <div class="menu-sub-heading-gold">
                              Lists of Members
                            </div>
                          </div> 
                        </a>
                    </li>
                </ul>
              </div>
            </li>
            <li class="sidebar-dropdown padding-list">
              <a href="#">
                <img src="{{ asset('images/nav-icons/ICON1-CONTACTUS.png')}}" class="dropdown-heading-icon">
                <div class="menu-heading">
                  <div class="display-flex">
                    <div>Current Safaris</div>
                    <div class="img-abs-icon"><img src="{{ asset('images/nav-icons/ICON2-CONTACT.png')}}"></div>
                  </div>
                  <div class="menu-sub-heading-gold">
                    Safari Fly
                  </div>
                </div>
              </a>
            </li>

          </ul>
        </div>

      </div>
    </div>
  </div>
-->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

jQuery(function ($) {

$(".sidebar-dropdown > a").click(function() {
$(".sidebar-submenu").slideUp(200);
if (
$(this)
  .parent()
  .hasClass("active")
) {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .parent()
  .removeClass("active");
} else {
$(".sidebar-dropdown").removeClass("active");
$(this)
  .next(".sidebar-submenu")
  .slideDown(200);
$(this)
  .parent()
  .addClass("active");
}
});

$("#close-sidebar").click(function() {
$(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
$(".page-wrapper").addClass("toggled");
});

});

</script>
    <!--
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file" class="align-text-bottom"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users" class="align-text-bottom"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers" class="align-text-bottom"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
-->
   


