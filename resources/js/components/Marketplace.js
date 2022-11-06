import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class Marketplace extends React.Component{
    render(){
        return(
          <div>
            <section class="header">
      <nav>
          <a href="index.html"><img src="css/images/logo.png" height="80px" width="80px" class="logo"/></a>
          <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onClick={hideMenu}></i>
            <ul>
              <li>
                  <Link to="/index">HOME</Link>
                </li>
                <li>
                <Link to="/aboutus">ABOUT US</Link>
                </li>
                <li>
                <Link to="/login">LOGIN</Link>
                </li>
                <li>
                <a href="http://sxg4476.uta.cloud/uncategorized/blog-home/"> BLOG</a>
                </li>
                <li>
                <Link to="/contactus">CONTACT US</Link>
                </li>
                <li>
                <Link to="/studentprofile">PROFILE</Link>
                </li>
                <li>
                <Link to="/marketplace">MARKETPLACE</Link>
                </li>
                <li>
                <Link to="/products">PRODUCTS</Link>
                </li>
              </ul>
        </div>
        <i class="fa fa-bars" onClick={showMenu}></i>
        </nav>
        <div class="row">
          <div class="text">
              <h1>GIVE YOUR CAMPUS INVOLVEMENT <br/> LIFE A NEW TWIST </h1>
              <p>Get the safe and private platform for your Campus Community,
              <br/>Make buing and selling easier than ever</p>
          </div>
          <div class="col-2">
            <img src="css/images/students-ecommerce.png" alt="" />
          </div>
        </div>
        <footer>
          <p>SIGNED IN AS STUDENT</p>
        </footer>
      </section>
            
        </div>
        );
    }
}
export default Marketplace;