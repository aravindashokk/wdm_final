
import React from "react";
import {Link} from "react-router-dom";
import { showMenu } from "../App";
import { hideMenu } from "../App";
class ForgotPassword extends React.Component{
    render(){
        return(
            
            <div class="header">
                <nav>
                    <a href="index.html"><img src="css/images/logo.png" height="80px" width="80px" class="logo"/></a>
                    <div className="nav-links" id="navLinks">
              <i className="fa fa-times" onClick={hideMenu}/>
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
              </ul>
            </div>
                  <i class="fa fa-bars" onClick={showMenu}></i>
                  </nav>
                  <div class="login">
                    <h1>ACCOUNT RECOVERY</h1>
                    <form >
                        <label for="studentID">STUDENT ID</label>
                        <input type="text" placeholder="" value=""/>
                        <label for="password">EMAIL</label>
                        <input type="password" placeholder="" value=""/>
                        <label for="password">Recovery email will be sent to this email.</label>
                        <input type="button"  value="SUBMIT"/>
                    </form>
                  </div>
                </div>
            
        );
    }
}
export default ForgotPassword;
 {/* <script type="text/javascript">
            var navLinks = document.getElementById("navLinks");
            function showMenu(){
              navLinks.style.right = "0";
            }
            function hideMenu(){
              navLinks.style.right = "-200px";
            }
          </script>
           */}