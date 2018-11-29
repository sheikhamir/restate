@extends('layouts.ahuse')

@section('title', 'Ahuse - Real Estate Listings in the U.K')

@section('body-content')
    <div class="banner jumbotron minimize-padding hidden-xs"><!-- (visible on DESKTOP) Search form only-->
        <!-- Empty jumbotron -->
    </div>
    <div class="container-fluid desktop-search text-center">
        <form action="." method="post" class="form-box row">
            <div class="row">
                <div class="col-xs-12 col-md-10 col-md-offset-1">
                    <div class="form-btn-container-desktop">
                        <button type="button" class="form-btn-desktop active">
                            For sale
                        </button><span class="form-btn-divider">&#124;</span><button type="button" class="form-btn-desktop">
                            To rent
                        </button><span class="form-btn-divider">&#124;</span><button type="button" class="form-btn-desktop">
                            <span class="hidden-xxs">Find agent</span>
                            <span class="visible-xxs-inline">Agents</span>
                        </button><span class="form-btn-divider">&#124;</span><button type="button" class="form-btn-desktop">
                            <span class="hidden-xxs">Sold prices</span>
                            <span class="visible-xxs-inline">Prices</span>
                        </button>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-divider"></div>
                    <div class="form-input-container">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter city, neighbourhood, address or school" required="required">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-theme">
                                    <i class="icon-inline glyphicon glyphicon-search"></i>
                                    <span class="icon-inline">Search</span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-divider divider-12"></div>
                    <div class="form-filter-container">
                        <div class="form-filter-desktop opt-1">
                            <div class="form-filter-title">
                                <label for="min_price">Minimum price (&pound;)</label>
                            </div>
                            <div class="form-filter-data"><div class="custom-select">
                                    <select id="min_price" name="min_price">
                                        <?php generate_price_as_options(); ?>
                                    </select>
                                </div>
                            </div>
                        </div><div class="form-filter-desktop divider"></div><div class="form-filter-desktop opt-2">
                            <div class="form-filter-title">
                                <label for="max_price">Maximum price (&pound;)</label>
                            </div>
                            <div class="form-filter-data">
                                <div class="custom-select">
                                    <select id="max_price" name="max_price">
                                        <?php generate_price_as_options(); ?>
                                    </select>
                                </div>
                            </div>
                        </div><div class="form-filter-desktop divider"></div><div class="form-filter-desktop opt-3">
                            <div class="form-filter-title">
                                <label for="property_type">Property type</label>
                            </div>
                            <div class="form-filter-data">
                                <div class="custom-select">
                                    <select id="property_type" name="property_type">
                                        <option value="0">ANY ...</option>
                                        <option value="1">Houses</option>
                                        <option value="2">Flats</option>
                                        <option value="3">Farm / Land</option>
                                    </select>
                                </div>
                            </div>
                        </div><div class="form-filter-desktop divider"></div><div class="form-filter-desktop opt-4">
                            <div class="form-filter-title">
                                <label for="bedrooms">Bedrooms</label>
                            </div>
                            <div class="form-filter-data">
                                <div class="custom-select">
                                    <select id="bedrooms" name="bedrooms">
                                        <option value="0">ANY ...</option>
                                        <option value="studio">Studio+</option>
                                        <option value="1">1+</option>
                                        <option value="2">2+</option>
                                        <option value="3">3+</option>
                                        <option value="4">4+</option>
                                        <option value="5">5+</option>
                                        <option value="6">6+</option>
                                        <option value="7">7+</option>
                                        <option value="8">8+</option>
                                        <option value="9">9+</option>
                                        <option value="10">10+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container hidden-xs radius-search">
        <div class="row constrained-width section">
            <div class="col-lg-5 col-sm-7 col-sm-12 row-items">
                <div class="radius-search-container">
                    <div class="radius-search-logo"></div>
                    <div class="radius-search-content">
                        <div class="radius-search-text">
                            Search exactly where you are interested in by editing
                            our area boundaries - or drawing your own directly on the map.
                        </div>
                        <div class="radius-search-heading">
                            To Start Search For your Area
                        </div>
                        <div class="radius-search-input">
                            <input type="text" placeholder="e.g. Oxford, NW3 or Waterloo Station">
                        </div>
                        <div class="radius-search-options">
                            <div class="radius-search-option">
                                <input type="checkbox" checked="checked" name="for_sale" id="for_sale"/>
                                <label for="for_sale">
                                    For Sale
                                </label>
                            </div><div class="radius-search-option">
                                <input type="checkbox" name="to_rent" id="to_rent"/>
                                <label for="to_rent">
                                    To Rent
                                </label>
                            </div><div class="radius-search-option">
                                <input type="checkbox" name="new_homes" id="new_homes"/>
                                <label for="new_homes">
                                    New Homes
                                </label>
                            </div>
                        </div>
                        <div class="radius-search-btn">
                            <button type="submit">Define My Area Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-5 col-sm-12 row-items text-center">
                <div class="property-valuation-box theme-box display-block-xs home-bg">
                    <div class="theme-box-title">Valuate your property</div>
                    <div class="theme-box-content">
                        Wants to Valuate your Property to see how
                        much it’s worth is? Hire an estate agent or
                        a team and they will pay a visit to inspect
                        your property and tell how much it is worth.
                    </div>
                    <div class="theme-box-btn">
                        <a href="/valuate-property">Valuate Now</a>
                    </div>
                </div><div class="property-alerts-box theme-box display-block-xs exc-bg">
                    <div class="theme-box-title">Get New Property Alerts</div>
                    <div class="theme-box-content">
                        Sign Up Now to get Instant Property Alerts as
                        soon as a property hits our site, save
                        properties and searches, personalise content, and more!
                    </div>
                    <div class="theme-box-btn">
                        <a href="/sign-up">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center hidden-xs">
        <div class="section-divider"></div>
    </div>
    <div class="container hidden-xs">
        <div class="row constrained-width section">
            <div class="col-md-6 row-items">
                <div class="theme-card houses-bg">
                    <div class="theme-card-title arrow-end">Tenant Credit Check!</div>
                    <div class="theme-card-content">
                        <ul class="theme-card-list">
                            <li>Tenant Affordability Check</li>
                            <li>Full Income Verification</li>
                            <li>Current landlord checks</li>
                            <li>Detailed final report & Much More!</li>
                        </ul>
                    </div>
                    <div class="theme-card-btn">
                        <a href="#">Check Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 row-items">
                <div class="theme-card tick-bg">
                    <div class="theme-card-title arrow-end">List Your Property For Free!</div>
                    <div class="theme-card-content">
                        It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                        more-or-less normal distribution of letters, as opposed to using 'Content
                        here, content here', making it look like readable English.
                    </div>
                    <div class="theme-card-btn">
                        <a href="#">Add Property Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center hidden-xs">
        <div class="section-divider"></div>
    </div>
    <div class="container hidden-xs">
        <div class="row constrained-width section">
            <div class="col-md-6 row-items">
                <div class="theme-card buildings-bg">
                    <div class="theme-card-title arrow-end">Search by monthly budget</div>
                    <div class="theme-card-content has-heading">
                        <div class="h3 remove-margin">See where you can afford to live</div>
                        We will find a property including the running cost based on your monthly budget within the desired location.
                    </div>
                    <div class="theme-card-btn">
                        <a href="#">Search by budget</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 row-items">
                <div class="theme-card train-bg">
                    <div class="theme-card-title arrow-end">Search by travel time</div>
                    <div class="theme-card-content has-heading">
                        <div class="h3 remove-margin">Find a place near your work place</div>
                        We will find a property within your desired traveling time with your preferred means of transport.
                    </div>
                    <div class="theme-card-btn">
                        <a href="#">Search By Time</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center hidden-xs">
        <div class="section-divider"></div>
    </div>
    <div class="container hidden-xs">
        <div class="row constrained-width section">
            <div class="col-md-6 row-items">
                <div class="theme-card transparent-bg">
                    <div class="theme-card-title arrow-end">Help &amp; Advice</div>
                    <div class="theme-card-content">
                        <ul class="theme-card-list">
                            <li>
                                <div class="question">Why doesn't Ahuse recognise my search location?</div>
                                <div class="answer">The most common reason for this is a miss-spelt location name or incorrect po...</div>
                            </li>
                            <li>
                                <div class="question">My search, which included my area plus a few miles around, returned unexpected results?</div>
                                <div class="answer">When you search for an area plus a few miles, the distance is measured for the...</div>
                            </li>
                            <li>
                                <div class="question">I have enquired about several properties but have been informed by the agent that they are all are not available?</div>
                                <div class="answer">We are aware that some properties may be advertised on ahuse.co.uk when they are...</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 row-items">
                <div class="theme-card transparent-bg">
                    <div class="theme-card-title arrow-end">Latest News and updates</div>
                    <div class="theme-card-content">
                        <div class="theme-card-blog">
                            <div class="theme-card-blog-post">
                                <div class="theme-card-blog-post-img theme-card-blog-inline">
                                    <img src="{{asset('img/img1.jpg')}}"/>
                                </div>
                                <div class="theme-card-blog-post-content theme-card-blog-inline">
                                    <div class="theme-card-blog-post-title"><a href="#">House prices: This town is "best residential property investment...</a></div>
                                    <div class="theme-card-blog-post-info"><a href="#">Express.co.uk</a> - <span class="time">22 hours ago</span></div>
                                    <div class="theme-card-blog-post-content">Houses in Manchester are among the best to invest in for buy-to-let landlords, experts have said, According to the latest Hometrack UK Cities were almost near the verge of fall and did not notice what they could have accomplished in these years but these democrats...</div>
                                </div>
                            </div>
                            <div class="theme-card-blog-post">
                                <div class="theme-card-blog-post-img theme-card-blog-inline">
                                    <img src="{{asset('img/img1.jpg')}}"/>
                                </div>
                                <div class="theme-card-blog-post-content theme-card-blog-inline">
                                    <div class="theme-card-blog-post-title"><a href="#">House prices: This town is "best residential property investment...</a></div>
                                    <div class="theme-card-blog-post-info"><a href="#">Express.co.uk</a> - <span class="time">22 hours ago</span></div>
                                    <div class="theme-card-blog-post-content">Houses in Manchester are among the best to invest in for buy-to-let landlords, experts have said, According to the latest Hometrack UK Cities were almost near the verge of fall and did not notice what they could have accomplished in these years but these democrats...</div>
                                </div>
                            </div>
                            <div class="theme-card-blog-post">
                                <div class="theme-card-blog-post-img theme-card-blog-inline">
                                    <img src="{{asset('img/img1.jpg')}}"/>
                                </div>
                                <div class="theme-card-blog-post-content theme-card-blog-inline">
                                    <div class="theme-card-blog-post-title"><a href="#">House prices: This town is "best residential property investment...</a></div>
                                    <div class="theme-card-blog-post-info"><a href="#">Express.co.uk</a> - <span class="time">22 hours ago</span></div>
                                    <div class="theme-card-blog-post-content">Houses in Manchester are among the best to invest in for buy-to-let landlords, experts have said, According to the latest Hometrack UK Cities were almost near the verge of fall and did not notice what they could have accomplished in these years but these democrats...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid no-padding-xs visible-xs">
        <div class="row noMarginRow">
            <div class="col-xs-12 no-padding-xs">
                <div class="mobile-link-list">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="list-icon"><i class="glyphicon glyphicon-ok-sign"></i></div>
                            <div class="list-text">Search by budget</div>
                        </a><a href="#" class="list-group-item">
                            <div class="list-icon"><i class="glyphicon glyphicon-hourglass"></i></div>
                            <div class="list-text">
                                <span class="hidden-xxs">Search by travel time</span>
                                <span class="visible-xxs-inline">Travel time search</span>
                            </div>
                        </a><a href="#" class="list-group-item">
                            <div class="list-icon"><i class="glyphicon glyphicon-gbp"></i></div>
                            <div class="list-text">Sold prices</div>
                        </a><a href="#" class="list-group-item">
                            <div class="list-icon"><i class="glyphicon glyphicon-home"></i></div>
                            <div class="list-text">Property for sale</div>
                        </a><a href="#" class="list-group-item">
                            <div class="list-icon"><i class="glyphicon glyphicon-map-marker"></i></div>
                            <div class="list-text">Search by radius</div>
                        </a><a href="#" class="list-group-item">
                            <div class="list-icon"><i class="glyphicon glyphicon-piggy-bank"></i></div>
                            <div class="list-text">Tenant credit check</div>
                        </a><a href="#" class="list-group-item">
                            <div class="list-icon"><i class="glyphicon glyphicon-tag"></i></div>
                            <div class="list-text">Request property valuation</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center hidden-xs">
        <div class="section-divider"></div>
    </div>
    <div class="container">
        <div class="row constrained-width section">
            <div class="row-items col-xs-12 no-padding-xs">
                <div class="country-list-box">
                    <div class="country-list-box-title">Browse by location</div>
                    <div class="country-list-box-content">
                        <ul>
                            <li><a href="#">Aberdeen</a></li>
                            <li><a href="#">Bath</a></li>
                            <li><a href="#">Brighton</a></li>
                            <li><a href="#">Bristol</a></li>
                            <li><a href="#">Chelmsford</a></li>
                            <li><a href="#">Cornwall</a></li>
                            <li><a href="#">Dundee</a></li>
                            <li><a href="#">Edinburgh</a></li>
                            <li><a href="#">Gloucester</a></li>
                            <li><a href="#">Hull</a></li>
                            <li><a href="#">Leeds</a></li>
                            <li><a href="#">Leicester</a></li>
                            <li><a href="#">London</a></li>
                            <li><a href="#">Manchester</a></li>
                            <li><a href="#">Norwich</a></li>
                            <li><a href="#">Nottingham</a></li>
                            <li><a href="#">Plymouth</a></li>
                            <li><a href="#">Portsmouth</a></li>
                            <li><a href="#">Southampton</a></li>
                            <li><a href="#">Stoke on Trent</a></li>
                            <li><a href="#">Birmingham</a></li>
                            <li><a href="#">Bradford</a></li>
                            <li><a href="#">Cambridge</a></li>
                            <li><a href="#">Cardiff</a></li>
                            <li><a href="#">Coventry</a></li>
                            <li><a href="#">Derby</a></li>
                            <li><a href="#">Exeter</a></li>
                            <li><a href="#">Glasgow</a></li>
                            <li><a href="#">Inverness</a></li>
                            <li><a href="#">Kent</a></li>
                            <li><a href="#">Lincoln</a></li>
                            <li><a href="#">Liverpool</a></li>
                            <li><a href="#">Newcastle</a></li>
                            <li><a href="#">Northampton</a></li>
                            <li><a href="#">Oxford</a></li>
                            <li><a href="#">Peterborough</a></li>
                            <li><a href="#">Reading</a></li>
                            <li><a href="#">Sheffield</a></li>
                            <li><a href="#">Swansea</a></li>
                            <li><a href="#">York</a></li>
                            <li class="more-opt"><a href="#">More options</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 visible-xs no-padding">
                <div class="divider-xs"></div>
            </div>
            <div class="col-lg-5 col-xs-12 row-items no-padding-xs visible-xs">
                <div class="social-icons">
                    <div class="social-icons-title">Follow us</div>
                    <div class="social-icons-content">
                        <a class="icon facebook" href="#"></a>
                        <a class="icon twitter" href="#"></a>
                        <a class="icon gplus" href="#"></a>
                        <a class="icon linkedin" href="#"></a>
                        <a class="icon instagram" href="#"></a>
                        <a class="icon youtube" href="#"></a>
                        <a class="icon pinterest" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection